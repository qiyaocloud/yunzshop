<?php
/**
 * 折扣优惠券
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2017/3/25
 * Time: 下午5:20
 */

namespace app\frontend\modules\coupon\services\models\Price;


use app\frontend\modules\coupon\services\models\Coupon;
use app\frontend\modules\goods\services\models\PreGeneratedOrderGoodsModelGroup;
use app\frontend\modules\order\services\models\PreGeneratedOrderModel;

class DiscountCouponPrice extends CouponPrice
{

    public function getPrice()
    {
        return (1 - $this->dbCoupon->discount) * $this->coupon->getOrderGoodsInScope()->getPrice();
    }
}