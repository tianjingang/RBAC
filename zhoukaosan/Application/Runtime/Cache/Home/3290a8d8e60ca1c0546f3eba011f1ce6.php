<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分配角色</title>
	<script src="/mouth5/zhoukaosan/Public/Js/jquery-1.7.2.min.js"></script>

</head>
<body>
	<p><input type="text" name="r_role"></p>
	<p><input type="button" value="添加角色" class="submit"></p>
	<h4>当前已存在的角色：</h4>
	<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($v["r_role"]); ?></a><br><?php endforeach; endif; else: echo "" ;endif; ?>
	</body>
	</html>
<script>
	$(function(){
		 $('input[name]="r_role"').blur(function(){
             if($(this).val()==""){
             	$(this).next().remove();
             	$(this).after('<span>角色不能为空</span>');
             }else{
             	$(this).next().remove();
             }
		});
		 $('.submit').click(function(){
		 var r_role= $('input[name]="r_role"').val();
		 //alert(r_role)
		 $.ajax({
		 	type:'post',
		 	url:'fenpei',
		 	data:{
		 		r_role:r_role
		 	},
		 	success:function(msg){
		 		//alert(msg)
               if(msg==1){
                // $('r_role').next().remove();
             	 $('input[name]="r_role"').after('<span>该角色已存在</span>');
               }
			   else{
			        location.href="/mouth5/zhoukaosan/index.php/Home/Index/fenpei";
			   }
		 	}
		 });
		 });
	});
</script>