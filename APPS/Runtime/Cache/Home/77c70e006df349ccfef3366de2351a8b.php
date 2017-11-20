<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/PHP5/index.php/Home/Message/domessage" method="post" enctype="multipart/form-data">
		留言主题：<input type="text" name="title"/><br/><br/>
		留言内容：<textarea type="text" name="content"></textarea><br/><br/>
		附　　件：<input type="file" name="filename"></input><br/><br/>
		<input type="submit" value="提交"/>
		
	</form>
</body>	
</html>