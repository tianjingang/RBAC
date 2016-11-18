<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加用户</title>
</head>
<body>
	<form action="<?php echo U('Index/adduser');?>" method="post">
		<table>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="username" ></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="pwd" ></td>
			</tr>
			<tr>
				<td>角色</td>
				<td><select name="r_id" >
				<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["r_id"]); ?>"><?php echo ($v["r_role"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" value="添加用户"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>