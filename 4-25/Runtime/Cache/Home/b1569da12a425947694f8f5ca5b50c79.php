<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <h1 style="color:red">用户登录</h1>
    <form action="<?php echo U('Login/login_check');?>" method="post">
<table>
    <tr>
        <td>用户名</td>
        <td><input type="text" name="u_name"/></td>
    </tr>
    <tr>
        <td>密码</td>
        <td><input type="password" name="u_pwd"/></td>
    </tr>
    <tr>
        <td><input type="submit" value="登录"/></td>
        <td><a href="<?php echo U('User/user');?>">添加新用户</a></td>
    </tr>
</table>
    </form>
</center>
</body>
</html>