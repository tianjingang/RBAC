<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">
<form action="/mouth5/20160406/index.php/Home/Lst/lst" method="post">
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="ming"></td>
        </tr>
        <tr>
            <td>你所需的资金额度：</td>
            <td><input type="radio" name="e" value="<20万"><20万
                <input type="radio" name="e" value="20万-50万">20万-50万
                <input type="radio" name="e" value=">50万">>50万
            </td>
        </tr>
        <tr>
            <td>你能否接受房产抵押贷款：</td>
            <td><input type="radio" name="fang" value="是">是
                <input type="radio" name="fang" value="否">否
            </td>
        </tr>
        <tr>
            <td>你的房产所在城市：</td>
            <td><input type="text" name="cheng"></td>
        </tr>
        <tr>
            <td>你的房产持证时间是：</td>
            <td><input type="radio" name="shi" value="<6个月"><6个月
                <input type="radio" name="shi" value="6个月-18个月">6个月-18个月
                <input type="radio" name="shi" value=">18个月">>18个月
            </td>
        </tr>
        <tr>
            <td>你是否能提供房产证原件：</td>
            <td><input type="radio" name="yuan" value="是">是
                <input type="radio" name="yuan" value="否">否
            </td>
        </tr>
        <tr>
            <td>房产时候有做过抵押贷款：</td>
            <td><input type="radio" name="dai" value="是">是
                <input type="radio" name="dai" value="否">否</td>
        </tr>
        <tr>
            <td>未结清贷款现在是否仅有一笔：</td>
            <td><input type="radio" name="bi" value="是">是
                <input type="radio" name="bi" value="否">否</td>
        </tr>
        <tr>
            <td>房产证上是否有18岁以下，60岁以上的产权人：</td>
            <td><input type="radio" name="chi" value="是">是
                <input type="radio" name="chi" value="否">否</td>
        </tr>
        <tr>
            <td><input type="submit" value="下一步"></td>
            <td></td>
        </tr>
        </table>
</form>