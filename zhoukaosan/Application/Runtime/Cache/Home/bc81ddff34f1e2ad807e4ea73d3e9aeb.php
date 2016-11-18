<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>权限分配</title>
	 <script>
       var  uquery="<?php echo U('Index/uquery');?>";
    </script>
</head>
<body>
	<form action="<?php echo U('Index/quanxian');?>" method="post">
		<select name="r_id" id="r_id">
		 <option value="">请选择角色...</option>
		<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["r_id"]); ?>"><?php echo ($v["r_role"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select><br>
		<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo str_repeat('&nbsp;&nbsp;',$v['level']);?>
           <input type="checkbox" name="p_id[]" value="<?php echo ($v["p_id"]); ?>"><?php echo ($v["pivilege"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
         <input type="submit" value="分配权限">
	</form>
</body>
</html>
<script src="/mouth5/zhoukaosan/Public/Js/jquery-1.7.2.min.js"></script>
<script>
    $(function(){
        $('#r_id').change(function(){
        	//alert(1)
            var r_id=$(this).val();
            //alert(uid);
            var p_id=$("input[name='p_id[]']");
            $.ajax({
                type:'post',
                url:uquery,
                data:{
                    r_id:r_id
                },
                dataType:'json',
                success:function(data){
                    if(data){
                        //alert(234);
                        p_id.attr('checked',false);
                        for(var i=0;i<p_id.length;i++){
                            for(var j=0;j<data.length;j++){
                                 if(data[j].p_id==p_id.eq(i).val()){
                                        p_id.eq(i).attr('checked',true);
                                 }
                            }
                        }

                    }
                }
            });
        });
    });
</script>