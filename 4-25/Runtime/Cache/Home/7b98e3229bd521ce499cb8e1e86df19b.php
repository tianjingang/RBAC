<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <h1 style="color:red">用户添加</h1>
<form action="<?php echo U('User/add');?>" method="post">
    <table>
        <tr>
            <td>请输入添加的用户名:</td>
            <td><input type="text" name="u_name"/></td>
        </tr>
        <tr>
            <td>请输入添加的用户密码:</td>
            <td><input type="text" name="u_pwd"/></td>
        </tr>
        <tr>
            <td>请选择您要添加的角色</td>
            <td>
                <select name="r_id">
                    <?php if(is_array($a)): foreach($a as $key=>$v): ?><option value="<?php echo ($v["r_id"]); ?>"><?php echo ($v["r_name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="添加用户"/></td>
            <td></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>