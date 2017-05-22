<?php

namespace app\common\models\goods;

use app\common\models\BaseModel;
use app\common\observers\dispatchObserver\DispatchObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Validator;

/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 2017/2/22
 * Time: 下午5:54
 */
class Dispatch extends BaseModel
{
    public $table = 'yz_dispatch';
    public $attributes = [
        'display_order' => 0,
        'first_weight' => 1000,
        'first_weight_price' => 0,
        'another_weight' => 1000,
        'another_weight_price' => 0,
        'first_piece' => 1,
        'first_piece_price' => 0,
        'another_piece' => 1,
        'another_piece_price' => 0,
    ];

    /**
     *  不可填充字段.
     *
     * @var array
     */
    protected $guarded = ['deleted_at'];


    /**
     * 自定义显示错误信息
     * @return array
     */
    public static function getDispatchList()
    {
        $dispatchList = self::uniacid()->where('enabled', 1)->Where('is_plugin', 0)
            ->get()->toArray();
        return $dispatchList;
    }

    /**
     * 自定义字段名
     * 可使用
     * @return array
     */
    public  function atributeNames()
    {
        return [
            'uniacid' => '公众号id',
            'dispatch_name' => '配送方式名称',
            'display_order' => '排序',
            'is_default' => '是否默认',
            'enabled' => '是否显示',
            'calculate_type' => '计算方式'
        ];
    }


    public  function rules()
    {
        return [
            'uniacid' => 'required',
            'dispatch_name' => 'required|max:50',
            'display_order' => '',
            'is_default' => 'digits_between:0,1',
            'enabled' => 'integer',
            'calculate_type' => 'digits_between:0,1'
        ];
    }

    public static function boot()
    {
        parent::boot();
        static::observe(new DispatchObserver());
    }


}