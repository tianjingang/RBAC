<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<div id="box">
<center>
<table>
    <p>欢迎[<b><?php echo ($u_name); ?></b>]登录</p>
    <tr>
        <td>部门</td>
        <td><font color="red"><?php echo ($data["r_name"]); ?></font></td>
    </tr>
    <tr>
        <td>当前薪资</td>
        <td><font color="red"><?php echo ($data["p_old"]); ?>￥<a href="/mouth5/4-13/index.php/Home/Index/index1_pro">申请调薪</a></font></td>
    </tr>
    <tr>
        <td>期望薪资</td>
        <td><input type="text" name="p_new"/><button onclick="pay()">提交</button></td>
    </tr>
</table>
</center>
</div>
</body>
</html>
<script>
    function pay(){
        var p_new=document.getElementsByName('p_new')[0].value;
        var ajax=new XMLHttpRequest();
        ajax.open("get",'/mouth5/4-13/index.php/Home/Index/index1_pro1/p_new/'+p_new);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                  document.getElementById('box').innerHTML=ajax.responseText;
            }
        }
    }
</script>