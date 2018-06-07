<?php 
namespace Framework;
class mysql
{
	public function __construct(){

		header('content-type:text/html;charset=utf8');

		$con = mysql_connect('127.0.0.1','root','root');

		$ect = mysql_select_db('text',$con);

		if ($ect) {

			echo '连库成功';

		}else{

			echo '连库失败';

		}
	}

	public function select($table){

		$sql = "SELECT * FROM $table";

		$arr = mysql_query($sql);

		$list = mysql_fetch_array($arr);
		
		return $list;
	}
}






 ?>