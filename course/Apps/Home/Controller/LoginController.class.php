<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    //验证登录
    function login_check(){
        /*if(!IS_POST){
            $this->display();
        }
        else{*/
            $data=I('post.');
            $m=D('user');
            $arr=$m->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
       // echo $m->_sql();die;
            if(!$arr){
                echo '用户名不存在';die;
            }
        else{
            session('u_name',$arr['u_name']);
            session('u_pwd',$arr['u_pwd']);
            session('u_id',$arr['u_id']);
        }

           $brr= $m->join("u_r on user.u_id=u_r.u_id")->where("user.u_id=$arr[u_id]")->find();
          //echo M('role')->_sql();die;
            if($brr['r_id']==1){
               // $this->redirect('Index/index1');
               $this->success('学生登录成功',U('Index/student'));
            }else if($brr['r_id']==2){
                $this->success('讲师登陆成功',U('Index/show_teacher'));
            }else{
                $this->success('主任登录成功',U('Index/leader'));
            }
        }
    //学生登录

    }
