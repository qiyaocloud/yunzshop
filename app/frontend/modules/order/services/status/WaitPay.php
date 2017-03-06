<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2017/3/2
 * Time: 下午4:55
 */

namespace app\frontend\modules\order\services\status;


use app\common\models\Order;

class WaitPay implements StatusService
{
    private $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getStatusName()
    {
        return '待付款';
    }

    public function getButtonModels()
    {
        $result =
            [
                [
                    'name' => '付款',
                    'api' => '/order/op/pay',//
                    'value' => static::PAY
                ],
                [
                    'name' => '取消订单',
                    'api' => '/order/op/cancelPay',
                    'value' => static::CANCEL
                ],
            ];
        return $result;
    }
}