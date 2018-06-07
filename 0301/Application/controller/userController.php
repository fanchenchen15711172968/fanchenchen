<?php 
namespace Application\controller;
class userController extends \Framework\core
{
	

	public function register(){
		$arr = 'Hello';
		$this->assign('arr',$arr);
		$this->display('user/index.html');
	}
}


 ?>