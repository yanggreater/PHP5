<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>留言主题：<?php echo ($vo["title"]); ?><br/>
		留言内容：<?php echo ($vo["content"]); ?><br/>
		文 件 名：<?php echo ($vo["filename"]); ?><br/>
		时　　间：<?php echo ($vo["time"]); ?><br/>
		留 言 人：<?php echo ($vo["username"]); ?>
		<hr/><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php echo ($show2); ?>
</body>
</html>