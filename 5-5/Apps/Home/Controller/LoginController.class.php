<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }
    //验证登录
    public function login_check(){
        //接值
        $data=I('post.');
        //和数据库里数据匹配
        $arr=D('user')->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
        //判断
        if($arr){
            //赋值session
            session('u_id',$arr['u_id']);
            session('u_name',$arr['u_name']);
           // echo 1;
        }
        else{
            //echo 0;
            $this->error('用户名或密码错误');die;
        }
        //查询登录者所属角色
        $brr=D('user')->join('u_r on user.u_id=u_r.u_id')->where("user.u_id=$arr[u_id]")->find();
        //判断角色
        if($brr['r_id']==1){
            $this->success('运营人员登陆成功',U('Index/implode'));
        }
        else{
            $this->success('编辑人员登陆成功',U('Index/implode'));

        }

    }
}