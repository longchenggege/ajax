<?php
header("Content-Type:text/html; charset=utf-8");
$user = isset($_GET['user'])?$_GET['user']:'xx';
echo "输入字符是".$user;
?>