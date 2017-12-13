<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js"></script>
<title>无标题文档</title>
</head>
<body>
<script>
$(document).ready(function(){
	$("button").click(function(){
		var name = $("#username").val();
		/*$.ajax({
			type:"POST",
			url:"xx1.php",
			data:{name:name},
			success:function(date){
				$("div#asd").html(date);
				}
			});*/
			//url,date,callback
			/*$.post("xx1.php",{name:'niuxx'},function(date){
				$("div#asd").html(date);
				});*/
			$("div#asd").load("xx1.php",{name:name});	
		});
	})


</script>
<div id="asd">
<font>PHP100视频教程，通过AJAX技术调用内容,这里内容将被替代</font>
</div>
<input type="text" name="user" id="username"><button type="button">提交</button>
<div style="margin:100px auto;">
    <div>
      <img src="ajax.jpg">
      <h3>ajax有感</h3>
      <p>1、图为ajax具体操作图，本文件夹主要针对第三步返回（xml/tex/json）数据的处理分别在anli_xml/anli_text/anli_json中展现</p>
      <p>2、处理url这边echo要返回的数据，若是数组要用json_encode转化成json数据。</p>
      <p>3、urlencode()和urldecode()的作用是什么？？</p>
      <p>为什么kami.tpl.php里面返回的数据不用eval转化而liebiao.php里面要转化。</p>
      <p>还有例子是ribao（content.php、liebiao.php）和dianka(zbadmin/templates/kami.tpl.php、)</p>
      <p>ajax请求道服务器，服务器可以返回json/xml/html三种数据：1、优选json，</p>
    </div>
</div>
</body>
</html>