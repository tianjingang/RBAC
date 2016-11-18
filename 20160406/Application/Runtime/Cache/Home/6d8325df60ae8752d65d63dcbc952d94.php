<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<table border="1">
    <tr>
        <td>申请编号</td>
        <td>申请人</td>
        <td>申请金额</td>
        <td>能否接受房产抵押</td>
        <td>房产所在城市</td>
        <td>房产证持证时间</td>
        <td>能否提供房产证原件</td>
        <td>房产是否有做过抵押</td>
        <td>是否有未结清贷款</td>
        <td>系统审核结果</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($arr)): foreach($arr as $key=>$vl): ?><tr>
        <td><?php echo ($vl["lid"]); ?></td>
        <td><?php echo ($vl["ming"]); ?></td>
        <td><?php echo ($vl["e"]); ?></td>
        <td><?php echo ($vl["fang"]); ?></td>
        <td><?php echo ($vl["cheng"]); ?></td>
        <td><?php echo ($vl["shi"]); ?></td>
        <td><?php echo ($vl["yuan"]); ?></td>
        <td><?php echo ($vl["dai"]); ?></td>
        <td><?php echo ($vl["bi"]); ?></td>
        <td>
            <?php if($vl["tai"] == 1): ?>通过
                <?php elseif($vl["tai"] == 0): ?>
                未通过<?php endif; ?>
        </td>
        <td><a href="/mouth5/20160406/index.php/Home/Index/shen/tid/<?php echo ($v["tid"]); ?>">通过</a>||<a href="/mouth5/20160406/index.php/Home/Index/shenn/tid/<?php echo ($v["tid"]); ?>">不通过</a></td>
    </tr><?php endforeach; endif; ?>
</table>