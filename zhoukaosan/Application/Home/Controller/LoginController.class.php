<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }
    //检验登录
     public function login_check(){
     	$username=I('post.username');
     	$pwd=I('post.pwd');
        $res=M('login')->where(array("usernamer"=>$username))->find();
        if(!$res) die("用户名不正确");
        if($res['pwd']!=$pwd) die("密码错误");
        session("uname",$res['username']);
        session("id",$res['id']);
        $this->redirect('Index/index');
    }
}