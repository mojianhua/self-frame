<?php
namespace app\ctrl;
use app\model\productModel;
/**
* 
*/
class indexCtrl extends \core\import
{
	public function index()
	{
		// $model = new \core\lib\model();
		// $sql = 'select * from f2c_product_en limit 10';
		// $res = $model->query($sql);
		// dump($res->fetchAll());
		//$model = new \app\model\productModel();
		//$product = new productModel();
		//$data = $product->lists();
		//dump($data);
		//视图类
		$abc = 123;
		$this->assign('data',$abc);
		$title = 'title1111';
		$this->assign('title',$title);
		$this->display('index/index');
	}
}