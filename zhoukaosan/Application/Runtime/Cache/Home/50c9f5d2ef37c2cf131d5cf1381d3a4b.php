<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="<?php echo U('Login/login_check');?>" method="post">
		<table>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="pwd" id=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="登录"></td>
			</tr>
		</table>
	</form>
</body>
</html>