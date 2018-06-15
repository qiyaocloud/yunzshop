<?php
/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 2017/3/24
 * Time: 下午12:42
 */

namespace app\common\services;

use app\backend\modules\member\models\MemberRelation;
use app\common\models\PayOrder;
use app\common\services\finance\BalanceChange;
use app\frontend\modules\finance\services\BalanceService;

class RemittancePay extends Pay
{

    public function doPay($params = [])
    {
        $operation = '银行转账支付 订单号：' . $params['order_no'];
        $this->log($params['extra']['type'], '银行转账支付', $params['amount'], $operation, $params['order_no'], Pay::ORDER_STATUS_NON, \YunShop::app()->getMemberId());

        self::payRequestDataLog($params['order_no'], $params['extra']['type'], '银行转账', json_encode($params));

        $pay_order_model = PayOrder::uniacid()->where('out_order_no', $params['order_no'])->first();

        if ($pay_order_model) {
            $pay_order_model->status = 2;
            $pay_order_model->trade_no = $params['trade_no'];
            $pay_order_model->third_type = '银行转账';
            $pay_order_model->save();
        }
        // todo 从设置中获取
        $payeeInfo = [
            [   'title'=>'户名',
                'text'=>'沈阳京东世纪贸易有限公司'
            ],
            [   'title'=>'户名',
                'text'=>'1109142664110801'
            ],
            [   'title'=>'开户行',
                'text'=>'招商银行北京青年路支行'
            ],
            [   'title'=>'联行号',
                'text'=>'3061 0000 5545'
            ],
            [   'title'=>'汇款识别码',
                'text'=>$params['order_no']
            ],
            [   'title'=>'支付单号',
                'text'=>$params['order_no']
            ],

        ];

        $data = [
            'pay_sn'=>$params['order_no'],
            'payee_info'=>$payeeInfo
        ];
        dd($data);
        exit;

        return $data;

    }

    public function doRefund($out_trade_no, $totalmoney, $refundmoney)
    {
        // TODO: Implement doRefund() method.
    }

    public function doWithdraw($member_id, $out_trade_no, $money, $desc, $type)
    {
        // TODO: Implement doWithdraw() method.
    }

    public function buildRequestSign()
    {
        // TODO: Implement buildRequestSign() method.
    }
}