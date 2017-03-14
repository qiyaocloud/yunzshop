<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2017/3/3
 * Time: 上午9:10
 */

namespace app\frontend\modules\order\controllers;

use app\common\components\BaseController;
use app\frontend\modules\order\models\OrderDetailModel;
use app\frontend\modules\order\services\AutoCancel;
use app\frontend\modules\order\services\AutoComplete;


class DetailController extends BaseController
{
    public function index(){
        $orderId = \Yunshop::request()->order_id;
        if (!$orderId) {
            return $this->errorJson($msg = '缺少访问参数', $data = []);
        } else {
            $orderDetail = OrderDetailModel::getOrderDetail($orderId);
            if (!$orderDetail){
                return $this->errorJson($msg = '未找到数据', $data = []);
            } else {
                return $this->successJson($msg = 'ok', $data = $orderDetail->toArray());
            }
        }
    }
}