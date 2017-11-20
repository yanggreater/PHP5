<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="/PHP5/Public/JS/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/PHP5/Public/Css/basic.css" />
	<script type="text/javascript">
		$(function(){
			$('input[name="username"]').blur(function(){
				var username=$(this).val();
				$.get('/PHP5/index.php/Home/Register/checkname',{'username':username},function(data){
					if(data=='不允许'){
						$('input[name="username"]').after('<p id="umessage">该用户以注册</p>')
					}else{
						$('#umessage').remove();
					}
				});
			});

		});
		$(function(){
			$('input[name="code"]').blur(function(){
				var code=$(this).val();
				$.get('/PHP5/index.php/Home/Register/checkcode',{'code':code},function(data){
					
					if(data==0){
						document.getElementById('error').innerHTML="<p color='red' id='ucode'>验证码错误</p>";
					}else{
						$('#ucode').remove();
					}
				});
			});
		});
			
			function check(){
				var pw1=document.getElementById('pass').value;
				var pw2=document.getElementById('repass').value;
			
			if(pw1==pw2){
				document.getElementById('tishi').innerHTML="<font color='green'>两次密码相同</font>";
				
			}else{
				document.getElementById('tishi').innerHTML="<font color='red'>两次密码不相同</font>";
				
			}
		}	
	</script>
</head>
<body>
	<form action="/PHP5/index.php/Home/Register/doreg" method="post">
		用 户 名：<input type="text" name="username"/><br/><br/>
		密　　码：<input type="password" name="password" id="pass" /><br/><br/>
		确认密码：<input type="password" name="repassword" id="repass" onkeyup="check()"/><span id="tishi"></span><br/><br/>
		性　　别：<input type="radio" name="sex" value="男">男 <input type="radio" name="sex" value="女">女<br/>
		验 证 码：<input type="text" name="code"/> <img src="/PHP5/index.php/Home/Public/code" onclick="this.src=this.src+'?'+Math.random()" />
		<span id="error"></span><br/>
		<input type="submit" value="注册"/>  

	</form>
</body>
</html>