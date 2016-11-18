<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('Login/login_check');?>" method="post">
    <table border="1">
        <tr>
            <td>账号</td>
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