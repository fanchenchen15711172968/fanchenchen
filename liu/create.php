<?php 
header("content-type:text/html;charset=utf-8");
// 连接数据库
$db=mysql_connect('127.0.0.1','root','root');
// 设置字符编码
mysql_query("set name utf8");
// 选择数据库
mysql_select_db('liu');
$name=$_POST['name'];
$ten=$_POST['ten'];
// sql语句
$sql="insert into er value('null','$name','$ten')";

// 执行sql语句
$res=mysql_query($sql);
// print_r($res);die;
// 判断用户
if($res){
      echo "<script>alert('添加成功');location.href='show.php'</script>";
}else{
   echo "<script>alert('添加失败');location.href='index.html'</script>";
}
