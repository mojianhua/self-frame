<?php
namespace core\lib;
use core\lib\conf;
class route
{
	public $ctrl;
	public $action;

	public function __construct()
	{
		/**
		* 1、隐藏index.php
		* 2、获取url参数部分
		* 3、返回控制器和方法
		*/
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
			$uri = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
			if(isset($uri[0])){
				$this->ctrl = $uri[0];
			}else{
				$this->ctrl = conf::get('CTRL','route');
			}
			unset($uri[0]);
			if(isset($uri[1])){
				$this->action = $uri[1];
				unset($uri[1]);
			}else{
				$this->action = conf::get('ACTION','route');
			}

			$_GET = [];
			$count = count($uri);
			for ($i=2; $i<=$count ; $i=$i+2) { 
				$_GET[$uri[$i]] = $uri[$i + 1];
			}
		}else{
			$this->action = conf::get('ACTION','route');
			$this->ctrl = conf::get('CTRL','route');
		}
	}
}