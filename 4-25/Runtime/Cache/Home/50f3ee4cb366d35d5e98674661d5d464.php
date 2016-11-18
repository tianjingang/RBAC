<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1 style="color: red">分配权限</h1>
    <form action="/mouth5/4-25/index.php/Home/Index/add_power/" method="post">
             <table>
                 <tr>
                     <td>
                         角色:<select name="r_id">
                         <option value="请选择">请选择</option>
                             <?php if(is_array($ar)): $i = 0; $__LIST__ = $ar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["r_id"]); ?>"><?php echo ($v["r_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                         </select>
                     </td>
                     <td><input type="submit" value="分配权限"/></td>
                 </tr>
                <tr>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><p><input type="checkbox" name="" value="<?php echo ($val["p_id"]); ?>"/><?php echo ($val["p_power"]); ?><br/></p><?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
             </table>
         </form>
</body>
</html>