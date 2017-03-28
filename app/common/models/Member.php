<?php
namespace app\common\models;

use app\backend\models\BackendModel;

/**
 * Created by PhpStorm.
 * User: jan
 * Date: 21/02/2017
 * Time: 12:58
 */
class Member extends BackendModel
{
    public $table = 'mc_members';

    const INVALID_OPENID = 0;

    protected $search_fields = ['mobile', 'uid', 'nickname', 'realname'];
    protected $primaryKey = 'uid';

    public $timestamps = false;

    /**
     * 主从表1:1
     *
     * @return mixed
     */
    public function yzMember()
    {
        return $this->hasOne('app\backend\modules\member\models\MemberShopInfo', 'member_id', 'uid');
    }

    /**
     * 会员－粉丝1:1关系
     *
     * @return mixed
     */
    public function hasOneFans()
    {
        return $this->hasOne('app\common\models\McMappingFans', 'uid', 'uid');
    }

    /**
     * 会员－订单1:1关系
     *
     * @return mixed
     */
    public function hasOneOrder()
    {
        return $this->hasOne('app\backend\modules\order\models\Order', 'uid', 'uid');
    }

    /**
     * 获取用户信息
     *
     * @param $member_id
     * @return mixed
     */
    public static function getUserInfos($member_id)
    {
        return self::select([
            'uid',
            'avatar',
            'nickname',
            'realname',
            'avatar',
            'mobile',
            'gender',
            'createtime',
            'credit1',
            'credit2'
        ])
            ->uniacid()
            ->where('uid', $member_id)
            ->with([
                'yzMember' => function ($query) {
                    return $query->select(['member_id', 'parent_id', 'is_agent', 'group_id', 'level_id', 'is_black', 'alipayname', 'alipay'])
                        ->with([
                            'group' => function ($query1) {
                                return $query1->select(['id', 'group_name']);
                            },
                            'level' => function ($query2) {
                                return $query2->select(['id', 'level_name']);
                            },
                            'agent' => function ($query3) {
                                return $query3->select(['uid', 'avatar', 'nickname']);
                            }
                        ]);
                },
                'hasOneFans' => function ($query4) {
                    return $query4->select(['uid', 'openid', 'follow as followed']);
                }
            ]);
    }

    /**
     * 通过id获取用户信息
     *
     * @param $member_id
     * @return mixed
     */
    public static function getMemberById($member_id)
    {
        return self::where('uid', $member_id)
            ->first();
    }

    /**
     * 添加评论默认名称
     * @return mixed
     */
    public static function getRandNickName()
    {
        return self::select('nickname')
            ->whereNotNull('nickname')
            ->inRandomOrder()
            ->first();
    }

    /**
     * 添加评论默认头像
     * @return mixed
     */
    public static function getRandAvatar()
    {
        return self::select('avatar')
            ->whereNotNull('avatar')
            ->inRandomOrder()
            ->first();
    }

    /**
     * 设置会员积分/余额
     *
     * @param string $member_id
     * @param string $credittype
     * @param int $credits
     */
    public static function setCredit($member_id = '', $credittype = 'credit1', $credits = 0)
    {
        $data = self::getMemberById($member_id)->toArray();

        $newcredit = $credits + $data[$credittype];
        if ($newcredit <= 0) {
            $newcredit = 0;
        }

        self::uniacid()
            ->where('uid', $member_id)
            ->update([$credittype=>$newcredit]);
    }

    public static function getOpenId($member_id){
        $data = self::getUserInfos($member_id)->first();
        if ($data) {
            $info = $data->toArray();

            if (!empty($info['has_one_fans'])) {
                return $info['has_one_fans']['openid'];
            } else {
                return INVALID_OPENID;
            }
        }
    }
}