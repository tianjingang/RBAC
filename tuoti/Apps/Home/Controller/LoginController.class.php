<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    //验证登录
    function login_check()
    {
       $data=I('post.');
        $m=D('user');
        $arr=$m->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
        if($arr){
            //echo 1;
            session('u_id',$arr['u_id']);
            session('u_name',$arr['u_name']);
        }
        else{
            echo '用户名或密码错误';die;
        }
        $brr=$m->join("u_r on user.u_id=u_r.u_id")->where("user.u_id=$arr[u_id]")->find();
        if($brr['r_id']==1){
            $this->success('学生登录成功',U('Index/student_show'));
        }
        elseif($brr['r_id']==2){
            $this->success('讲师登陆成功',U('Index/teacher'));
        }
        else{
            $this->success('主任登陆成功',U('Index/leader'));

        }
    }

    }
