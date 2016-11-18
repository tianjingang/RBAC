<?php if (!defined('THINK_PATH')) exit();?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="">
        <tr>
            <td>登录身份:讲师-<?php echo (session('u_name')); ?></td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td>错题图片预览:
                <img src="/mouth5/tuoti/<?php echo ($val["photo"]); ?>" alt="" height="80" width="80"/>
            </td>
            <td>错题评判:
                <input type="radio" name="ping" value="通过"/>通过
                <input type="radio" name="ping" value="不通过"/>不通过
            </td>
            <td>修改方案:
                <textarea name="p_reson"  cols="20" rows="10"><?php echo ($val["p_reson"]); ?></textarea>
            </td>
            <td><input type="submit" value="提交"/></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>