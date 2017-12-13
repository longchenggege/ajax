<?php
    header("Content-Type:text/xml; charset=utf-8");
    //接受数据
	$sheng = isset($_POST['sheng'])?$_POST['sheng']:0;
    file_put_contents('s.txt',$sheng."\r\n",FILE_APPEND);
	$info='';
	if($sheng=='zhejiang'){
	    $info.= "<privice><city>台州</city><city>杭州</city><city>宁波</city></privice>";	
	}elseif($sheng=='jiangsu'){
	    $info.="<privice><city>无锡</city><city>苏州</city><city>徐州</city></privice>";	
	}
	echo $info;
?>