<?php
namespace app\api\controller\channel;
@session_start();
use app\api\YZ;

class Chamer_list extends YZ
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $result = $this->callPlugin('channel/chamer_list');
        $this->returnSuccess($result);
    }
}