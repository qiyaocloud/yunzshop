<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2017/4/1
 * Time: 下午4:37
 */

namespace app\frontend\modules\member\services;


use app\common\exceptions\AppException;
use app\frontend\modules\member\models\MemberCart;
use Illuminate\Support\Collection;

class MemberCartService
{
    public function clearCartByIds($ids)
    {
        if (!is_array($ids)) {
            $ids = explode(',', $ids);
        }
        if (!is_array($ids)) {
            throw new AppException('未找到商品或已经删除');
        }
        $cart = MemberCart::getMemberCartByIds($ids);

        if (!$cart) {
            throw new AppException('未找到商品或已经删除');
        }

        return MemberCart::destroyMemberCart($ids);
    }

    public static function newMemberCart($params)
    {

        $cart = new MemberCart($params);
        if (!isset($cart->goods)) {
            throw new AppException('(ID:' . $cart->goods_id . ')未找到商品或已经删除');
        }
        if($cart->isOption() && !isset($cart->goodsOption)) {
            throw new AppException('(ID:' . $cart->option_id . ')未找到商品规格或已经删除');
        }
//        if ($cart->total > $cart->goods->stock) {
//            throw new AppException($cart->goods->title . ':库存不足');
//        }
        //todo 验证option_id是否属于goods_id
        return $cart;
    }

    /**
     * @param Collection $memberCarts
     * @return Collection
     */
    public static function filterShopMemberCart(Collection $memberCarts)
    {
        return $memberCarts->filter(function ($memberCart) {
            /**
             * @var $memberCart MemberCart
             */
            if (empty($memberCart->goods->is_plugin)) {
                return true;
            }
            return false;
        });
    }

    public static function filterPluginMemberCart(Collection $memberCarts)
    {
        return $memberCarts->filter(function ($memberCart) {
            /**
             * @var $memberCart MemberCart
             */
            if (!empty($memberCart->goods->is_plugin)) {
                return true;
            }
            return false;
        });
    }
}