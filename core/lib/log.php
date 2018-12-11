<?php
namespace core\lib;
use core\lib\conf;
class log
{
	static $class;
	/**
	* 1、保存方式
	* 2、写日志
	*/
	static public function init(){
		$drive = conf::get('DRIVER','log');
		$class = '\core\lib\drive\log\\'.$drive;
		self::$class = new $class;
	}

	static public function log($message = '',$file = 'log')
	{
		self::$class->log($message,$file);
	}
}