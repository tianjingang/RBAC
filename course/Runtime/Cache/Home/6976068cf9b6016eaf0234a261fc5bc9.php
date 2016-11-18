<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('Index/leader_fen');?>" method="post">
    <h1>欢迎<?php echo (session('u_name')); ?>主任登录教学管理系统
    </h1>
    <table border="1">
        <tr>
            <td>讲师列表</td>
            <td>
                <select name="t_id">
                    <?php if(is_array($ar)): $i = 0; $__LIST__ = $ar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["u_id"]); ?>"><?php echo ($v["u_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>课程列表</td>
            <td>
                <?php if(is_array($br)): $i = 0; $__LIST__ = $br;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><!--
                    <input type="checkbox" name="c_id[]" value="<?php echo ($a["c_id"]); ?>"/><?php echo ($a["c_course"]); ?>
-->
                    <input type="radio" name="c_id" value="<?php echo ($a["c_id"]); ?>"/><?php echo ($a["c_course"]); endforeach; endif; else: echo "" ;endif; ?>
            </td>
        </tr>
        <tr>
            <td>班级列表</td>
            <td>
                <select name="l_id">
                    <?php if(is_array($cr)): $i = 0; $__LIST__ = $cr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><option value="<?php echo ($l["l_id"]); ?>"><?php echo ($l["l_class"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"/></td>
            <td><input type="reset" value="重置"/></td>
        </tr>
    </table>
</form>