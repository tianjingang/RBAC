<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<script src="/mouth5/5-6/Public/js/jquery-1.7.2.min.js"></script>
<body>
<form action="<?php echo U('Index/add');?>" method="post">
    <input type="hidden" value="<?php echo (session('u_name')); ?>" class="hidden"/>
    <table>
        <tr>
            <td></td>
            <td>显示顺序</td>
            <td>站点名称</td>
            <td>站点(URL)</td>
            <td>文字说明(可选)</td>
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
            <td><a href="javascript:void(0);" class="add">+添加友情链接</a></td>
        </tr>
    </table>
    <input type="checkbox"/><span>删</span>
    <?php if($_SESSION['u_name']== 'bianji'): else: ?>
        <input type="submit" value="提交"/><?php endif; ?>
</form>
<p><a href="<?php echo U('Index/out');?>">切换用户</a></p>
</body>
</html>
<script>
    $(function(){
        //判断权限
        $('.add').click(function(){
            //获取登录者名
            var u_name=$('.hidden').val();
            if(u_name=='bianji'){
                alert('对不起！您不具备操作该页面权限');
            }
            else{
                var str='<tr><td><input type="checkbox" name="p_id[]" p_id="<?php echo ($val["p_id"]); ?>"></td>'
                str=str+' <td><input type="text" name="p_order"></td>'
                str=str+'<td><input type="text" name="p_name"></td>'
                str=str+'<td><input type="text"  name="p_url"></td>'
                str=str+'<td><input type="text"  name="p_say"></td></tr>';
                var tr=$('.tr');
                tr.before(str);
            }
        })
    })
</script>