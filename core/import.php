<?php
namespace core;
class import
{
	public static $classMap = [];
	public $assign;

	static public function run()
	{
		\core\lib\log::init();
		\core\lib\log::log('abcd213','log');
		$route = new \core\lib\route();
		$ctrl = $route->ctrl;
		$action = $route->action;
		$classfile = APP.'/ctrl/'.$ctrl.'Ctrl.php';
		if(is_file($classfile)){
			$ctrlClass = '\\'.MODEL.'\ctrl\\'.$ctrl.'Ctrl';
			$class = new $ctrlClass;
			$class->$action();
		}else{
			throw new \Exception("找不到控制器".$ctrlClass);
		}
	}

	//自动加载类库
	static public function load($class)
	{
		if(isset($classMap[$class])){
			return true;
		}else{
			//自动加载类
			$class = str_replace('\\', '/', $class);
			$file = BASE.'/'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			}else{
				return false;
			}
		}
	}

	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}

	public function display($file){
		$file = APP.'/view/'.$file.'.html';
		if(is_file($file)){
			//extract($this->assign);
			$loader = new \Twig_Loader_Filesystem(APP.'/view/index');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => '/Applications/XAMPP/htdocs/kuangjia/cache',
			    'debug' => DEBUG
			));
			$template = $twig->load('index.html');
			$template->display($this->assign?$this->assign:'');
			//include $file;
		}
	}
}