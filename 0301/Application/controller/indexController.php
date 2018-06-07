<?php 
namespace Application\controller;
class indexController extends \Framework\core
{
	public function index(){

		$obj = new \Application\model\user();

		$obj->select1();

		$arr = 'Hello';

		$this->assign('arr',$arr);

		$this->display('index/index.html');

	} 
	public function login(){

		$arr = 'Hello';

		$this->assign('arr',$arr);
		
		$this->display('index/index.html');
	}
}

 ?>