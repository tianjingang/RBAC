<?php if (!defined('THINK_PATH')) exit();?><center>
        <table>
            <tr>
                <td>红球至少选择6个，最多选20个</td>
            </tr>

            <tr>
                <td>
                    <select name="red_num">
                        <?php
 for($i=6;$i<=20;$i++){ echo "<option value='".$i."'>$i</option>"; } ?>
                    </select></td>
                <input type="button" onclick="red_gold()" value="机选红球">
                </td>
            </tr>
            <td>
                <span id="red"></span>
            </td>
        </tr>

        </table>
        <table>
            <tr>
                <td>蓝球至少选择1个，最多选16个</td>
            </tr>
            <tr>
                <td><span id="blue"></span></td>
            </tr>
            <tr>
                <td>
                    <select name="blue_num">
                        <?php
 for($i=1;$i<=8;$i++){ echo "<option value='".$i."'>$i</option>"; } ?>
                </select></td>
                <button onclick="blue_gold()">机选蓝球</button>
            </tr>
        </table>
</center>
<script>
    function red_gold(){
        var red_num=document.getElementsByName('red_num')[0].value;
        var red=document.getElementById('red');
        var str='';
        for(var i=1;i<=red_num;i++){
            str=str+'&nbsp;&nbsp;'+parseInt(Math.random()*33);
        }
        red.innerHTML=str;
    }
    function blue_gold(){
        var blue_num=document.getElementsByName('blue_num')[0].value;
        var blue=document.getElementById('blue');
        var str='';
        for(var i=1;i<=blue_num;i++){
            str=str+'&nbsp;&nbsp;'+parseInt(Math.random()*16);
        }
        blue.innerHTML=str;
    }
</script>