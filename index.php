<?php 

	header('content-type:text/html;charset=utf8');

	define('IMOOC',str_replace('\\','/',__DIR__));

	define("APP",IMOOC.'/Application');

	define("FRAM",IMOOC.'/Framework');

	include FRAM."/core.php";

	spl_autoload_register('\Framework\core::load');

	\Framework\core::run();
	
	// \Common\config\config::index();

 ?>