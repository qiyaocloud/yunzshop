<?php

namespace  app\payment;

use app\backend\modules\member\models\MemberRelation;
use app\common\components\BaseController;
use app\common\models\OrderPay;
use app\common\models\PayOrder;
use app\frontend\modules\finance\services\BalanceService;
use app\frontend\modules\order\services\OrderService;
use Yunshop\Gold\frontend\services\RechargeService;

/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 24/03/2017
 * Time: 09:06
 */
class PaymentController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->init();
    }

    private function init()
    {
        $script_info = pathinfo($_SERVER['SCRIPT_NAME']);

        \Log::debug('执行脚本', $script_info['filename']);

        if (!empty($script_info)) {
            switch ($script_info['filename']) {
                case 'notifyUrl':
                    \YunShop::app()->uniacid = $this->getUniacid();
                    break;
                case 'refundNotifyUrl':
                case 'withdrawNotifyUrl':
                    $batch_no = !empty($_REQUEST['batch_no']) ? $_REQUEST['batch_no'] : '';

                    \Log::debug('支付宝订单批次号', $batch_no);

                    \YunShop::app()->uniacid = (int)substr($batch_no, 17, 5);

                    \Log::debug('当前公众号', \YunShop::app()->uniacid);
                    break;
                default:
                    \YunShop::app()->uniacid = $this->getUniacid();
                    break;
            }
        }

        \Setting::$uniqueAccountId = \YunShop::app()->uniacid;
    }

    private function getUniacid()
    {
        $body = !empty($_REQUEST['body']) ? $_REQUEST['body'] : '';
        $splits = explode(':', $body);

        if (!empty($splits[1])) {
            \Log::debug('当前公众号', intval($splits[1]));

            return intval($splits[1]);
        } else {
            return 0;
        }
    }

    /**
     * 支付回调操作
     *
     * @param $data
     */
    public function payResutl($data)
    {
        $type = $this->getPayType($data['out_trade_no']);
        $pay_order_model = PayOrder::getPayOrderInfo($data['out_trade_no'])->first();

        if ($pay_order_model) {
            $pay_order_model->status = 2;
            $pay_order_model->trade_no = $data['trade_no'];
            $pay_order_model->third_type = $data['pay_type'];
            $pay_order_model->save();
        }

        switch ($type) {
            case "charge.succeeded":
                \Log::debug('支付操作', 'charge.succeeded');

                $orderPay = OrderPay::where('pay_sn', $data['out_trade_no'])->first();

                if ($data['unit'] == 'fen') {
                    $orderPay->amount = $orderPay->amount * 100;
                }
                \Log::debug('操作的订单', $data['out_trade_no'] . '/' . $orderPay->amount . '/' . $data['total_fee']);
                if (bccomp($orderPay->amount, $data['total_fee'], 2) == 0) {
                    \Log::debug('更新订单状态');
                    OrderService::ordersPay(['order_pay_id' => $orderPay->id]);

                    //会员推广资格
                    \Log::debug('推广资格-' . \YunShop::app()->getMemberId());
                    MemberRelation::checkOrderPay(\YunShop::app()->getMemberId());
                }
                break;
            case "recharge.succeeded":
                \Log::debug('支付操作', 'recharge.succeeded');
                (new BalanceService())->payResult([
                    'order_sn'=> $data['out_trade_no'],
                    'pay_sn'=> $data['trade_no']
                ]);
                break;
            case "gold_recharge.succeeded":
                \Log::debug('金币支付操作', 'gold_recharge.succeeded');
                RechargeService::payResult([
                    'order_sn'=> $data['out_trade_no'],
                    'pay_sn'=> $data['trade_no']
                ]);
                break;
        }
    }

    /**
     * 支付方式
     *
     * @param $order_id
     * @return string
     */
    public function getPayType($order_id)
    {
        if (!empty($order_id)) {
            $tag = substr($order_id, 0, 2);

            if ('PN' == strtoupper($tag)) {
                return 'charge.succeeded';
            } elseif ('RV' == strtoupper($tag)) {
                return 'recharge.succeeded';
            } elseif ('RG' == strtoupper($tag)) {
                return 'gold_recharge.succeeded';
            }
        }

        return '';
    }
}