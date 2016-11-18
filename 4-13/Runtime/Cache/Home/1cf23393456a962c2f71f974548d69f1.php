<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<div id="box">
<center>
<table border="1">
    <tr>
        <td>编号</td>
        <td>申请人</td>
        <td>当前薪资</td>
        <td>期望薪资</td>
        <td>状态</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($val["u_id"]); ?></td>
        <td><?php echo ($val["u_name"]); ?></td>
        <td><?php echo ($val["p_old"]); ?></td>
        <td><?php echo ($val["p_new"]); ?></td>
        <td>
            <?php if($val["p_status"] == 1): ?>初审通过
                <?php elseif($val["p_status"] == -1): ?>
                未审核
                <?php else: ?>
                通过<?php endif; ?>
        </td>
        <td>
            <a href="javascript:void(0)" onclick="pass(<?php echo ($val["u_id"]); ?>)">通过</a>
            <a href="javascript:void(0)" onclick="pass_no(<?php echo ($val["u_id"]); ?>)">不通过</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</center>
</div>
</body>
</html>
<script>
    function pass(id){
        var ajax=new XMLHttpRequest();
        ajax.open("get",'/mouth5/4-13/index.php/Home/Index/index3_passs/id/'+id);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('box').innerHTML=ajax.responseText;

            }
        }
    }
    function pass_no(id){
        var ajax=new XMLHttpRequest();
        ajax.open("get",'/mouth5/4-13/index.php/Home/Index/index3_pass_noo/id/'+id);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById('box').innerHTML=ajax.responseText;
            }
        }
    }
</script>