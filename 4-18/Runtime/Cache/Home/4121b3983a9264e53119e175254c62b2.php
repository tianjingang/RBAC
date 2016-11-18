<?php if (!defined('THINK_PATH')) exit(); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
欢迎<?php echo ($val["r_role"]); echo ($val["u_name"]); ?>登录<br>
您拥有权限<br>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; echo ($val["p_privilege"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>