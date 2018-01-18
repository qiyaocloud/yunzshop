<?php
/**
 * Created by PhpStorm.
 * User: 宝佳
 * Date: 2018/1/17
 * Time: 16:24
 */

namespace app\common\services\finance;


use app\common\events\order\AfterOrderReceivedEvent;
use app\common\exceptions\ShopException;
use app\common\services\credit\ConstService;

class BalanceAwardService
{
    private $orderModel;

    public function awardBalance(AfterOrderReceivedEvent $event)
    {
        $this->orderModel = $event->getOrderModel();

        $data = $this->getChangeData();

        $result = (new BalanceChange())->award($data);
        if ($result !== true) {
            throw new ShopException('购物赠送余额失败，请重试！');
        }
    }

    private function getChangeData()
    {
        return [
            'member_id'     => $this->orderModel->uid,
            'remark'        => "购物赠送余额",
            'relation'      => $this->orderModel->order_sn,
            'operator'      => ConstService::OPERATOR_MEMBER,
            'operator_id'   => $this->orderModel->uid,
            'change_value'  => $this->getChangeValue(),
        ];
    }


    private function getChangeValue()
    {
       $orderGoods = $this->orderModel->hasManyOrderGoods;

        $change_value = 0;
        foreach ($orderGoods as $goodsModel)
        {
            $goodsSaleModel = $goodsModel->hasOneGoods->hasOneSale;

            if (!$goodsSaleModel || empty($goodsSaleModel->award_balance)) {
                continue;
            }
            $change_value += $this->proportionMath($goodsModel->payment_amount, $goodsSaleModel->award_balance, $goodsModel->total);
        }

        return $change_value;
    }


    private function proportionMath($price, $proportion, $total)
    {
        if (strexists($proportion, '%')) {
            $proportion = str_replace('%', '', $proportion);
            return bcmul(bcdiv(bcmul($price,$proportion,4),100,2),$total,2);
        }
        return bcmul($proportion,$total,2);
    }


}
