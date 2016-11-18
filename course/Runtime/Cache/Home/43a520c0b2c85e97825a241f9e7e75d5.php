<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('Login/add_class');?>" method="post">
<table border="1">
    <h1>欢迎<?php echo (session('u_name')); ?>同学登录教学管理系统
    </h1>
    <tr>
        <td>请选择班级</td>
        <td>
            <select name="l_id">
                <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["l_id"]); ?>"><?php echo ($val["l_class"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="添加"/></td>
        <td><input type="reset" value="重置"/></td>
    </tr>
</table>
</form>
<h3 style="color: deepskyblue;"><a href="#">查看课程信息</a></h3>