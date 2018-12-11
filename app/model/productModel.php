<?php
namespace app\model;
use core\lib\model;
/**
* 
*/
class productModel extends model
{
	public $table = 'product_en';
	public function lists()
	{
		var_dump($this->table);
		return $this->select($this->table,'*','');
	}
}