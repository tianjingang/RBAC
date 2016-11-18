<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<table>
    <tr>
        <td><a href="<?php echo U('Index/index');?>">切换用户</a>||<a href="<?php echo U('Index/lst');?>">申请填写</a></td>
    </tr>
</table>
<div id="do">
    <table border="1">
        <tr>

            <td>登录身份：<?php echo (session('uname')); ?></td>
        </tr>
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                <td>错题图片预览：<br/><img src="/mouth5/20160503/Uploads<?php echo ($v["tu"]); ?>" width="100px" height="80px"/></td>
                <td>错题评判：<br/><a href="javascript:void(0)" onclick="pass(<?php echo ($v["uid"]); ?>)">通过</a>||<a href="javascript:void(0)" onclick="pass_no(<?php echo ($v["uid"]); ?>)">不通过</a></td>
                <td>修改方案：<br/><?php echo ($v["yin"]); ?></td>
            </tr><?php endforeach; endif; ?>
    </table>
</div>
<script>
    function pass(id){
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange  =  function(){
            if(ajax.readyState == 4 && ajax.status==200) {
                document.getElementById('do').innerHTML = ajax.responseText;
            }
        }
        ajax.open('get','/mouth5/20160503/index.php/Home/Index/lst3_pass/id/'+id);
        ajax.send(null);
    }
    function pass_no(id){
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange  =  function(){
            if(ajax.readyState == 4 && ajax.status==200) {
                document.getElementById('do').innerHTML = ajax.responseText;
            }
        }
        ajax.open('get','/mouth5/20160503/index.php/Home/Index/lst3_pass_no/id/'+id);
        ajax.send(null);
    }
</script>