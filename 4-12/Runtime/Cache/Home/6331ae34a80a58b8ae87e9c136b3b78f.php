<?php if (!defined('THINK_PATH')) exit();?><center>
    <form action="/mouth5/4-12/index.php/Home/Index/update" method="post">
        <input type="hidden" name="id" value="{ar.id}"/>
        <table>
            <tr>
                <td>选课人</td>
                <td><input type="text" name="r_name"/></td>
            </tr>
            <tr>
                <td>所选课程</td>
                <td>
                    <input type="checkbox" name="r_course[]" value="<<PHP&&MYSQL>>"/>PHP MYSQL
                    <input type="checkbox" name="r_course[]" value="<<JavaScript项目实践>>"/>JavaScript项目实践
                    </br><input type="checkbox" name="r_course[]" value="<<面向对象和TP框架>>"/>面向对象和TP框架
                    <input type="checkbox" name="r_course[]" value="<<LINUX项目实践>>"/>LINUX项目实践
                    </br> <input type="checkbox" name="r_course[]" value="<<软件工程>>"/>软件工程
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="修改"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>