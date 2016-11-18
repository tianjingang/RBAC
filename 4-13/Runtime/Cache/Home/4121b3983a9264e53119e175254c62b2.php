<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<center>
<table>
    <p>欢迎[<b><?php echo ($u_name); ?></b>]登录</p>
    <tr>
        <td>部门</td>
        <td class="boy1"><font color="red"><?php echo ($data[r_name]); ?></font></td>
    </tr>
    <tr>
        <td>当前薪资</td>
        <td class="boy2"><font color="red">￥<?php echo ($data[p_old]); ?><a href="/mouth5/4-13/index.php/Home/Index/index1_pro" style="color: red">申请调薪</a></font></td>
    </tr>
</table>
</center>
</body>
</html>