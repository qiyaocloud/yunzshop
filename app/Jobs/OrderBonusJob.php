<?php
/**
 * Author: 芸众商城 www.yunzshop.com
 * Date: 2018/9/19
 * Time: 下午3:37
 */

namespace app\Jobs;


use app\common\events\order\CreatedOrderPluginBonusEvent;
use app\common\models\order\OrderPluginBonus;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OrderBonusJob implements  ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $tableName;
    protected $code;
    protected $foreignKey;
    protected $localKey;
    protected $amountColumn;
    protected $orderModel;
    protected $totalDividend;
    protected $condition;

    public function __construct($tableName, $code, $foreignKey, $localKey, $amountColumn, $orderModel, $totalDividend, $condition = null)
    {
        $this->tableName = $tableName;
        $this->code = $code;
        $this->foreignKey = $foreignKey;
        $this->localKey = $localKey;
        $this->amountColumn = $amountColumn;
        $this->orderModel = $orderModel;
        $this->totalDividend = $totalDividend;
        $this->condition = $condition;
    }

    public function handle()
    {
        // 验证表是否存在
        $exists_table = Schema::hasTable($this->tableName);
        if (!$exists_table) {
            return;
        }
        $build = DB::table($this->tableName)
            ->select()
            ->where($this->foreignKey, $this->orderModel[$this->localKey]);

        //分红条件
        if ($this->condition) {
            $build = $build->where($this->condition);
        }
        // 分红记录IDs
        $ids = $build->pluck('id');
        // 分红总和
        $sum = $build->sum($this->amountColumn);
        if ($sum == 0) {
            return;
        }
        $undivided = $this->totalDividend - $sum;
        // 存入订单插件分红记录表
        $model = OrderPluginBonus::addRow([
            'order_id'      => $this->orderModel->id,
            'table_name'    => $this->tableName,
            'ids'           => $ids,
            'code'          => $this->code,
            'amount'        => $sum,
            'undivided'     => $undivided,
            'status'        => 0
        ]);
        // 暂时不用, 门店利润 在 门店订单结算时重新计算, 各个插件产生分红的事件监听不同.
        // 如果后期插件统一事件产生分红,再启用此事件
        //event(new CreatedOrderPluginBonusEvent($model));
    }
}