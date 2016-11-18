<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<table>
    <tr>
        <td><a href="<?php echo U('Index/index');?>">切换用户</a>||<a href="<?php echo U('Index/lst');?>">申请填写</a></td>
    </tr>
</table>
<form action="<?php echo U('Pay/tian');?>" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>

            <td>登录身份：<?php echo (session('uname')); ?></td>
            <td>审核状态</td>
        </tr>
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                <td>错题图片预览：<br/><img src="/mouth5/20160503/Uploads<?php echo ($v["tu"]); ?>" width="100px" height="80px"/></td>
                <td>
                    <?php if($v["tai"] == 0): ?><font color="red">未审核</font>
                        <?php elseif($v["tai"] == 1): ?>
                        <font color="blue">审核中</font>
                        <?php elseif($v["tai"] == 2): ?>
                        <font color="aqua">通过</font>
                        <?php else: ?>
                        未通过<?php endif; ?>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</form>