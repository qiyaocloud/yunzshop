<?php
//ܿ���̳� QQ:913768135
if (!defined('IN_IA')) {
    exit('Access Denied');
}
class ChooseWeb extends Plugin
{
    public function __construct()
    {
        parent::__construct('choose');
    }
    public function index()
    {
    	return $this->_exec_plugin(__FUNCTION__);
    }
    public function basic()
    {
    	return $this->_exec_plugin(__FUNCTION__);

    }
    public function upgrade()
    {
    	return $this->_exec_plugin(__FUNCTION__);

    }
    // public function api()
    // {
    // 	return $this->_exec_plugin(__FUNCTION__);
    // }
    // public function menu()
    // {
    // 	return $this->_exec_plugin(__FUNCTION__);
    // }
}