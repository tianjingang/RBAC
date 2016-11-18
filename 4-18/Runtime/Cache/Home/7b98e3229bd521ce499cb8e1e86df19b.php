<?php if (!defined('THINK_PATH')) exit();?><center>
<form action="<?php echo U('User/user_check');?>" method="post">
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
            <td></td>
        </tr>
    </table>
</form>
</center>