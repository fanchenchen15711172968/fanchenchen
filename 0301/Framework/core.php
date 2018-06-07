<?php 
namespace Framework;
class core{

	public $assign;

	static public function run(){

		$obj = new \Framework\rou();

		$con = $obj->con;

		$act = $obj->act;

		$confile = APP.'/controller/'.$con.'Controller.php';

		$conclass= '\Application\controller\\'.$con.'Controller';

		if ($confile) {

			include $confile;

			$obj1 = new $conclass();

			$obj1-> $act();
			
		}
	}

	static public function load($class){

		$file = IMOOC.'/'.$class.'.php';

		// echo $file;die;
		if ($file) {

			include $file;
		}else{

			return false;
		}
	}

	public function assign($name,$value){

		$this->assign[$name] = $value;

	}

	public function display($file){

		$files = APP.'/view/'.$file;

		if ($files) {

			extract($this->assign);

			include $files;
			
			
		}else{

			return false;
			
		}
	}
	
}


 ?>