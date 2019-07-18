<?php
/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 17/2/23
 * Time: 上午11:00
 */

/**
 * 会员辅助表
 */
namespace app\frontend\modules\member\models;

use app\common\models\MemberShopInfo;

class SubMemberModel extends MemberShopInfo
{
    public static function getInfo($uniacid, $referralsn)
    {
        return self::where('uniacid', $uniacid)
            ->where('referralsn', $referralsn)
            ->first()
            ->toArray();
    }

    public static function updateDate($data, $where)
    {
        self::where('mobile', $where['mobile'])
            ->where('uniacid', $where['uniacid'])
            ->update($data);
    }

    /**
     * 添加数据
     *
     * @param $data
     */
    public static function insertData($data)
    {
        \Log::debug('----yz add data------', $data);
        self::create($data);
    }

    public static function getMemberId($openid)
    {
        return self::uniacid()
            ->where('yz_openid', $openid)
            ->value('member_id');
    }

    public static function updateOpenid($uid, $data)
    {
        \Log::debug('----yz update data------', $data);
        self::uniacid()
            ->where('member_id', $uid)
            ->update($data);
    }

    public static function getMemberByWechatTokenAndOpenid($token, $openid)
    {
        return self::uniacid()
            ->where('access_token_1', $token)
            ->join('mc_mapping_fans', function ($join) use ($openid) {
                $join->on('yz_member.member_id', '=' , 'mc_mapping_fans.uid')
                    ->where('mc_mapping_fans.openid', $openid);
            })
            ->first();
    }

    public static function getMemberByOpenid($openid)
    {
        return self::uniacid()
            ->where('yz_openid', $openid)
            ->first();
    }

    public static function getMemberByNativeToken($token)
    {
        return self::uniacid()
            ->where('access_token_2', $token)
            ->join('mc_members', function ($join) {
                $join->on('yz_member.member_id', '=' , 'mc_members.uid');
            })
            ->first();
    }
}