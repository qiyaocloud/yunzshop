<?php
/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 2017/3/6
 * Time: 上午11:32
 */

namespace app\backend\widgets\goods;

use app\common\components\Widget;
use app\common\facades\Setting;
use app\common\models\Coupon;
use app\common\models\goods\GoodsCoupon;

class CouponWidget extends Widget
{

    public function run()
    {
        $couponModel = GoodsCoupon::getGoodsCouponByGoodsId($this->goods_id)->first();

        $coupon = Coupon::getCouponById($couponModel->coupon_id);

        if(!$couponModel){
            $couponModel = [
                'is_coupon' => 0,
                'coupon_id' => 0,
                'send_times' => 0,
                'send_num' => 0,
            ];
        }
        return view('goods.widgets.coupon', [
            'item' => $couponModel,
            'coupon' => $coupon,
        ])->render();
    }
}
