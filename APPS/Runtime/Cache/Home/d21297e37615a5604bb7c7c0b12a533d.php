<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>您好，欢迎登陆</title>
	<link rel="stylesheet" type="text/css" href="/PHP5/Public/Css/basic.css" />
	<script type="text/javascript">
		function jump(){
			window.location="/PHP5/index.php/Home/Register/reg";
		}

		function check(){
			if(myform.username.value==""){
				alert("请填写用户名");
				myform.username.focus();
				return false;
			}
			if(myform.password.value.length<5){
				alert("密码不能少于5位");
				myform.password.focus();
				return false;
			}
		}
	</script>
</head>
<body>
	<form action="/PHP5/index.php/Home/Login/dologin" method="post" name="myform" onsubmit="return check();">
		用户名：<input type="text" name="username"/><br/><br/>
		密　码：<input type="password" name="password"/><br/>
		验证码：<input type="text" name="code"></input><img src="/PHP5/index.php/Home/Public/code" onclick="this.src=this.src+'?'+Math.random()" />
		<input type="submit" value="登录"/>  

	</form>
	<button onclick="jump()">注册</button>
	
</body>
</html>