<?php
header("Content-Type:text/html; charset=utf-8");
$user = isset($_GET['user'])?$_GET['user']:'xx';
$info='';
if($user=='long'){
	//json数据{属性名：属性值}像自定义js对象，但php里面不能定义js对象，只能先做成相关字符串再返回处理。
	$info= "{'mes':'不能注册'}";
}else{
	$info= "{'mes':'可以注册'}";
}
echo $info;
?>