<?php if (!defined('THINK_PATH')) exit();?><meta charset="UTF-8">
<table>
    <?php if(is_array($arr)): foreach($arr as $key=>$val): ?><tr>
        <td><?php echo ($val["pming"]); ?></td>
        <td><?php echo ($val["ming"]); ?></td>
    </tr><?php endforeach; endif; ?>
</table>