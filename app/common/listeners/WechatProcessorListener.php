<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 24/03/2017
 * Time: 18:48
 */

namespace app\common\listeners;


use app\common\events\WechatProcessor;
use Illuminate\Contracts\Queue\ShouldQueue;

class WechatProcessorListener
{

    public function __construct()
    {
        //
    }

    public function handle(WechatProcessor $event)
    {
        //获取微信进程 WeModuleProcessor 对象

        $processor = $event->getProcessor();
        //预定义的消息数据结构,本次请求消息,来自粉丝用户, 此属性由系统初始化, 消息格式请参阅 "开发术语 - 消息类型"
        $processor->message;

        //设置返回微信可以为空
        $event->setResponse('');
    }
}