<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2017/10/13
 * Time: 下午1:49
 */

namespace app\frontend\modules\finance\deduction\deductionSettings;

use app\frontend\modules\deduction\DeductionSettingInterface;

class PointShopDeductionSetting implements DeductionSettingInterface
{

    public function getWeight()
    {
        return 30;
    }

    // todo 将运费抵扣分离出去
    public function isEnableDeductDispatchPrice()
    {
        return \Setting::get('point.set.point_freight');
    }

    public function isDisable()
    {
        return !\Setting::get('point.set.point_deduct');
    }

    public function getMaxFixedAmount()
    {
        return false;
    }

    public function getMaxPriceProportion()
    {
        return \Setting::get('point.set.money_max');
    }

    public function getMinDeductionType()
    {
        return 'GoodsPriceProportion';
    }

    public function getMinFixedAmount()
    {
        return false;
    }

    public function getMinPriceProportion()
    {
        return \Setting::get('point.set.money_min');
    }

    public function getMaxDeductionType()
    {
        return 'GoodsPriceProportion';
    }
}