<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    public function user(){
        $a=M('role')->select();
        $this->assign('a',$a);
        $this->display();
    }
    //添加新用户
    function add(){
        $name=I('post.u_name');
        $pwd=I('post.u_pwd');
        $r_id=I('post.r_id');
        $a['u_name']=$name;
        $a['u_pwd']=$pwd;
        M('user')->add($a);
        $arr=M('user')->where("u_name='$name'")->find();
        $b['u_id']=$arr['u_id'];
        $b['r_id']=$r_id;
       $arr= M('u_r')->add($b);
        if($arr){
            $this->redirect('Login/login');
        }
        else{
          $this->redirect('User/user');
        }
    }
}