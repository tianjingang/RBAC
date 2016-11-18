<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户信息</title>
</head>
<body>
	<p>您的用户名是：<?php echo (session('uname')); ?></p>
	<p>您的角色是：<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; echo ($val["r_role"]); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?></p>
	<a href="<?php echo U('Index/fenpei');?>">分配角色</a><br>
	<a href="<?php echo U('Index/quanxian');?>">角色权限分配</a><br>
	<a href="<?php echo U('Index/adduser');?>">添加用户</a><br>
	

</body>
</html>