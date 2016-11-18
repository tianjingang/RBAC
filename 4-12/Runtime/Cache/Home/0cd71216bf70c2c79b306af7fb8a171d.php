<?php if (!defined('THINK_PATH')) exit();?><table>
    <tr>
        <td>序号</td>
        <td>选课人</td>
        <td>所选课程</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($val["id"]); ?></td>
        <td><?php echo ($val["r_name"]); ?></td>
        <td><?php echo ($val["r_course"]); ?></td>
        <td><a href="/mouth5/4-12/index.php/Home/Index/showone/id/<?php echo ($val["id"]); ?>">修改</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>