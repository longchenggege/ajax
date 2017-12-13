<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
无刷新验证注册用户名--区别anli1_yzyhm这里check.php返回xml格式数据，区别主要在对返回xml数据的处理上。
</title>

<script type="text/javascript">
//实例化ajax对象要考虑浏览器，不同浏览器创建方法不同
function getxmlhttpobject(){
	if(window.ActionXObject){
	var xmlHttps = new ActiveXObject('Microsoft.XMLHTTP');
	}else if(window.XMLHttpRequest){
	xmlHttps = new XMLHttpRequest();
    }
	return xmlHttps;
}

var xmlHttp = '';
function shi(){
	//运行上面方法创建xml对象
    xmlHttp = getxmlhttpobject();
	if(xmlHttp){
		//用get方法，写法如下
		//open，打开一个请求，但未发送，第一个参数请求方式，第二个是url，向那个页面请求，第三个true表示使用异步机制
		xmlHttp.open("get","check.php?user="+$("user").value,true);
		//指定回调函数，ru是函数名，后面是否带括号区别一个是调用，一个赋函数地址
		xmlHttp.onreadystatechange = ru;
		//将请求发送出去，如果是get请求，则填入null即可
	//如果是post请求，则填入实际的数据
		xmlHttp.send(null);
		
		
		
	/*//用post方法，写法如下：
	    //url里面后面不能传参数和值过去，在send函数里面发送
		xmlHttp.open("post","check.php",true);
		//比之get多加一句话，添加http头
		xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlHttp.onreadystatechange = ru;
		//要发送参数和值
		var data = "user="+$("user").value;
		xmlHttp.send(data);*/
	}
}

//定义ru函数	
function ru(){
	if(xmlHttp.readyState==4){
		var mes = xmlHttp.responseText;
		//使用eval函数将mes字符串转化成对象,固定格式
		var mes_obj = eval("("+mes+")");
		//对象：属性名----取得属性值
		$("xx").innerHTML = mes_obj.mes;
    }
}
//定义$方法
function $(id){
	return document.getElementById(id);
}
</script>

</head>
<body>

<form>
用户名:<input type="text" name="username" id="user">
<input type="button" value="验证用户" onclick="shi()">
<div id="xx">ss</div>
</form>

<div style="margin-top:50px;">
<h3>json使用注意</h3>
<p>1、若返回的字符串里含有多组数据，如$info='[{"name":"龙哥","age":"19"},{"name":"龙哥","age":"19"}]';用eval处理后(var xx = ("eval("+$info+")");)也是js数组，可以xx[1].name取得第二个数组里面的name属性的值;</p>
<p>2、若返回的字符串里含有多组数据，如$info='{"haoren":[{"name":"龙哥","age":"19"},{"name":"龙哥","age":"19"}]}';用eval处理后(var xx = ("eval("+$info+")");)也是js数组，可以xx.haoren[1].name取得第二个数组里面的name属性的值;</p>
</div>

</body>
</html>