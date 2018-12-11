<?php
namespace core\lib;
use core\lib\conf;
use Medoo\Medoo;
/**
* 
*/
// class model extends \PDO
// {
// 	public function __construct()
// 	{
// 		$temp = conf::all('database');
// 		$dsn = 'mysql:host='.$temp['HOST'].':'.$temp['PORT'].';dbname='.$temp['DBNAME'];
// 		$username = $temp['USER'];
// 		$password = $temp['PASSWORD'];
// 		try{
// 			parent::__construct($dsn,$username,$password);
// 		} catch(\PDOException $e){
// 			dump($e->getMessage());
// 		}
// 	}
// }

class model extends Medoo
{
	public function __construct()
	{
		$option = conf::all('database');
		parent::__construct($option);
	}
}