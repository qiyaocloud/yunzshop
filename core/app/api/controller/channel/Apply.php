<?php
namespace app\api\controller\channel;
@session_start();
use app\api\YZ;
use app\api\controller\order;
use yii\helpers\ArrayHelper;

class Apply extends YZ
{

    public function __construct()
    {
        parent::__construct();
    }
    public function withdraw()
    {
        global $_W;
        $_W['ispost'] = true;
        $result = $this->callPlugin('channel/apply');
        $this->json = $result['json'];
        $this->returnSuccess('',$this->json);
    }
    public function index()
    {
        $data = $this->callPlugin('channel/apply');
        $result = $data['json'];
        $result['navs']= [
            [
                'type'         => 0,
                'title'      => '提现到余额',
            ],[
                'type'         => 1,
                'title'      => '提现到微信钱包',
            ]
        ];
        $result['closetocredit'] = $this->set['closetocredit'];
        //echo "<pre>"; print_r($result);exit;
        $this->returnSuccess($result);
    }
}
