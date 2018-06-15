<?php

/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2018/6/6
 * Time: 下午4:11
 */

namespace app\common\models;

use app\common\models\BaseModel;

/**
 * 阶段
 * Class ModelBelongsStatus
 * @package app\common\models\statusFlow
 * @property Status status
 */
class Status extends BaseModel
{
    public $table = 'yz_status';

    protected $guarded = ['id'];


}
