<?php
/**
  * 入口文件
  * 1、定义常量
  * 2、加载函数库
  * 3、启动框架
*/
//框架所在目录
define('BASE',realpath('./'));
//核心文件目录
define('CORE',BASE.'/core');
//项目文件
define('APP',BASE.'/app');
//是否开启调试模式
define('DEBUG',true);
define('MODEL','app');
//引入composer
include "vendor/autoload.php";
//如果开启调试模式则显示错误信息
if(DEBUG){
  $whoops = new \Whoops\Run;
  $errorTitile = '出错了';
  $option = new \Whoops\Handler\PrettyPageHandler;
  $option->setPageTitle($errorTitile);
  $whoops->pushHandler($option);
  $whoops->register();
  ini_set('display_error', 'On');
}else{
  ini_set('display_error', 'Off');
}
include CORE.'/common/function.php';
//加载核心文件
include CORE.'/import.php';
//dump($_SERVER);
//自动加载类,当类目不存的时候触发的
spl_autoload_register('\core\import::load');

\core\import::run();