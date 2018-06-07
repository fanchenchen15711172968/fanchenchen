<?php 
header("content-type:text/html;charset=utf-8");
// 连接数据库
@$db=mysql_connect('127.0.0.1','root','root');
// 设置字符编码
mysql_query("set name utf8");
// 选择数据库
mysql_select_db('liu');
$sql="select * from er";
$res=mysql_query($sql);
// print_r($res);die;
$data=array();
while ($arr=mysql_fetch_array($res)) {
	$data[] = $arr;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
   <center>
   	<table>
   		<tr>
   			<td>id</td>
   			<td>姓名</td>
   			<td>内容</td>
   		</tr>
   	    <?php foreach ($data as $key => $val) { ?>
   		<tr>
   			<td><?php echo $val['id']?></td>
   			<td><?php echo $val['name']?></td>
   			<td><?php echo $val['ten']?></td>
   		</tr>
   		<?php } ?>
   	</table>
   </center>
</body>
</html>