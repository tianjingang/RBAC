<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    //验证登录
    function login_check(){
        if(!IS_POST){
            $this->display();
        }else{
        $data=I('post.');
        $m=D('user');
        $arr=$m->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
        if($arr){
            session('u_name',$arr['u_name']);
            session('u_id',$arr['u_id']);
        }
        else{
            $this->error('用户名不存在');
        }
            $brr=$m->join("u_r on user.u_id=u_r.u_id")->where("user.u_id=$arr[u_id]")->find();
            if($brr['r_id']==1){
                $this->success('校长登陆成功',U('Index/index1'));
            }elseif($brr['r_id']==2){
                $this->success('院长登陆成功',U('Index/index2'));
            }
            elseif($brr['r_id']==3){
                $this->success('主任登陆成功',U('Index/index3'));
            }
            else{
                $this->success('督查登陆成功',U('Index/index4'));
            }
    }
    }
}