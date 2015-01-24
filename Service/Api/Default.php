<?php
/**
 * 默认接口服务类
 *
 * @author: dogstar 2014-10-04
 */

class Api_Default extends Core_Api
{
	public function getRules()
    {
        return array(
            'index' => array(
                'username' 	=> array('name' => 'username', 'type' => 'string', 'default' => 'WeTime', 'require' => false),
            ),
        );
	}
	
	public function index()
	{
        return array(
            'title' => 'Default Api',
            'content' => T('Hello {name}, Welcome to use PhalApi!', array('name' => $this->username)),
            'verion' => PHALAPI_VERION,
            'time' => $_SERVER['REQUEST_TIME'],
        );
	}
}
