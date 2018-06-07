<?php 
namespace Framework;
class rou
{
	public $con;

	public $act;

	public function __construct(){

		// print_r($_SERVER['PATH_INFO']);die;
		// 
		if (isset($_SERVER['PATH_INFO'])) {

			// echo 11;die;
			//print_r($_SERVER['PATH_INFO']);

			$arr = explode('/',$_SERVER['PATH_INFO']);

			//print_r($arr);die;

			$this->con = $arr[1];

			$this->act = $arr[2];

		}else{

			// echo 22;die;
			$this->con = 'index';
			
			$this->act = 'index';
		}
	}
}





 ?>