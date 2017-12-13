<?php
//要返回xml文本，文本类型先得定义为text/xml格式的,$info后面是（.）。
header("Content-Type:text/xml; charset=utf-8");
$user = isset($_GET['user'])?$_GET['user']:'xx';
$info='';
if($user=='long'){
	$info.= "<res><mes>不能注册</mes></res>";
}else{
	$info.= "<res><mes>可以注册</mes></res>";
}
echo $info;
?>