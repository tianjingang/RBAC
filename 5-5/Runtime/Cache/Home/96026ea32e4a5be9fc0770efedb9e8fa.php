<?php if (!defined('THINK_PATH')) exit();?><script src="/mouth5/5-5/Public/Home/jquery-1.7.2.min.js"></script>
<form action="<?php echo U('Index/add');?>" method="post">
    <input type="hidden" value="<?php echo (session('u_name')); ?>" class="hidden"/>
<table>
    <tr>
        <td></td>
        <td>显示顺序</td>
        <td>站点名称</td>
        <td>站点(URL)</td>
        <td>文字说明</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><input type="checkbox" name="p_id[]" p_id="<?php echo ($val["p_id"]); ?>"/></td>
        <td><input type="text" value="<?php echo ($val["p_order"]); ?>"/></td>
        <td><input type="text" value="<?php echo ($val["p_name"]); ?>"/></td>
        <td><input type="text" value="<?php echo ($val["p_url"]); ?>"/></td>
        <td><input type="text" value="<?php echo ($val["p_say"]); ?>"/></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr class="tr">
        <td></td>
        <td><a href="javascript:void(0)" class="ad">+添加友情链接</a></td></tr>
</table>
    <input type="checkbox"/><span>删</span>
    <?php if($_SESSION['u_name']== 'bianji'): else: ?>
        <input type="submit" value="提交"/><?php endif; ?>
</form>
<script>
    $(function(){
        $('.ad').click(function(){
            var u_name=$('.hidden').val();
            if(u_name=='bianji'){
                alert('对不起！权限不足');
            }
            else{
                //alert(1);
                var str=str+'<tr><td><input type="checkbox" name="p_id[]" p_id="<?php echo ($val["p_id"]); ?>"/></td>'
                str=str+' <td><input type="text" name="p_order"/></td>'
                str=str+'<td><input type="text" name="p_name"/></td>'
                str=str+'<td><input type="text" name="p_url"/></td>'
                str=str+'<td><input type="text" name="p_say"/></td></tr>';
                var tr=$('.tr');
                tr.before(str);
            }
        });



    });

</script>