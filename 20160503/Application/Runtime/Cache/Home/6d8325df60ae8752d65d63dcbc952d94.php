<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<form action="<?php echo U('Pay/tian');?>" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>

            <td>登录身份：<?php echo (session('uname')); ?></td>

            <td><input type="submit" value="申请"></td>
        </tr>
        <tr>
            <td>错题图片上传：<br/><input type="file" name="tu"></td>
            <td>申请原因：<br/><textarea rows="5" cols="10" name="yin"></textarea></td>
        </tr>
    </table>
</form>