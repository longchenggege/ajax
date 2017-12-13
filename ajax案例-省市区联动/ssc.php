<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>省-城市-县城</title>
</head>
<body>
<script>
function getxmlhttpobject(){
	if(window.ActionXObject){
	var xmlHttps = new ActiveXObject('Microsoft.XMLHTTP');
	}else if(window.XMLHttpRequest){
	xmlHttps = new XMLHttpRequest();
    }
	return xmlHttps;
}
var xmlht = '';
function sendRequest(){
    xmlht = getxmlhttpobject();
	if(xmlht){
	    xmlht.open('post','sscheck.php',true);
		xmlht.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlht.onreadystatechange = ru;
		var data = 'sheng='+$('sheng').value;
		xmlht.send(data);
	} 
}

function ru(){
	if(xmlht.readyState==4){
		
		if(xmlht.status==200){
		    var cities=xmlht.responseXML.getElementsByTagName("city");
			//先清空之前数据
			$('city').length = 0;
			//添加  --城市--
			var myoption = document.createElement('option');
			myoption.innerText='--城市--';
			$('city').appendChild(myoption);
			for(var i=0;i<cities.length;i++){
				/*option+="<option value='cities["+i+"].childNodes[0].nodeValue'>cities["+i+"].childNodes[0].nodeValue</option>";*/
			//将取出的值添加到city下面	
			var city_name = cities[i].childNodes[0].nodeValue;	
			var myoption = document.createElement('option');
			myoption.innerText = city_name;
			myoption.value = city_name;
			$('city').appendChild(myoption);
			}
			//取出服务器会送的数据	
		}
		//$("xx").innerHTML = xmlHttp.responseText;
    }
}

function $(id){
	return document.getElementById(id);
}
</script>

<select id="sheng" onchange="sendRequest();">
<option value="">---省---</option>
<option value="zhejiang">浙江</option>
<option value="jiangsu" >江苏</option>
</select>
<select id="city">
<option value="">--城市--</option>
</select>

<select id="county">
<option value="">--县城--</option>
</select>

</body>
</html>