<?php if (!defined('THINK_PATH')) exit();?><table border="1">
    <h3>欢迎<?php echo (session('u_name')); ?>同学登录教学管理系统
    </h3>
    <tr>
        <td>编号</td>
        <td>学生姓名</td>
        <td>课程名称</td>
        <td>班级</td>
        <td>讲师</td>
    </tr>
    <?php if(is_array($res2)): $str = 0; $__LIST__ = $res2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($str % 2 );++$str;?><tr>
        <td><?php echo ($str); ?></td>
        <td><?php echo (session('u_name')); ?></td>
        <td><?php echo ($val["c_course"]); ?></td>
        <td><?php echo ($res1["l_class"]); ?></td>
        <td><?php echo ($val["u_name"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>