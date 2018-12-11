<?php
namespace core\lib;
class conf
{
	static public $conf = [];
	//获取单个配置项
	static public function get($name,$file){
		/**
		* 1、判断配置文件是否存在
		* 2、判断配置项是否存在
		* 3、存入缓存
		*/
		if(isset(self::$conf[$file])){
			return self::$conf[$file][$name];
		}else{
			$path = BASE.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				if(isset($conf[$name])){
					self::$conf[$file] = $conf;
					return $conf[$name];
				}else{
					throw new \Exception("配置项不存在".$name);
				}
			}else{
				throw new \Exception("配置文件不存在".$file);
			}
		}
	}


	static public function all($file){
		if(isset(self::$conf[$file])){
			return self::$conf[$file];
		}else{
			$path = BASE.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				self::$conf[$file] = $conf;
				return self::$conf[$file];
			}else{
				throw new Exception("配置文件不存在".$file);
			}
		}
	}
}