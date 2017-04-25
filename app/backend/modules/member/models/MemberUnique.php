<?php
/**
 * Created by PhpStorm.
 * User: dingran
 * Date: 2017/4/24
 * Time: 下午4:36
 */

namespace app\backend\modules\member\models;


use app\common\models\BaseModel;

class MemberUnique extends BaseModel
{
    public $table = 'yz_member_unique';

    /**
    * 删除会员信息
    *
    * @param $id
    */
    public static function  deleteMemberInfoById($id)
    {
        return self::uniacid()
            ->where('member_id', $id)
            ->delete();
    }
}