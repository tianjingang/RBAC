<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<center>
  <h1 style="color: red">用户信息显示</h1>
  <tr><td>用户名是:<?php echo ($u_name); ?></td></tr>
 <tr><td>角色是:<?php echo ($role); ?></td></tr>
    <tr><a href="<?php echo U('Login/login');?>">退出登录</a></tr>
    <tr><a href="<?php echo U('Index/index5');?>">分配权限</a></tr>
</center>
</body>
</html>