<?php if (!defined('THINK_PATH')) exit();?><h1 style="color: red;">学生申报列表</h1>
<p><a href="<?php echo U('Login/login');?>">切换用户</a>||<a href="<?php echo U('student_add');?>">申请填写</a></p>
<table border="1">
    <tr>
        <td>登录身份:学生-<?php echo (session('u_name')); ?></td>
        <td>审核状态</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><img src="/mouth5/tuoti/<?php echo ($val["photo"]); ?>" alt="" width="80" height="80"/></td>
        <td><?php echo ($val["p_statue"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>