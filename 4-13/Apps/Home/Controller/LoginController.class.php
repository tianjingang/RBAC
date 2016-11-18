<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }
    //验证登录
    function login_check(){
      //判断接值方式
        if(!IS_POST){
          $this->display();
      }else{
            //接值
            $data=I('post.');
            //实例化
            $m=D('user');
            //匹配数据库里数据与传过来的值
            $arr=$m->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
            if($arr){
                session("u_id",$arr['u_id']);
                session("u_name",$arr['u_name']);
               // echo 1;
            }
            else{
                $this->error('用户名不存在,登陆失败');
            }
           $brr=$m->join("u_r on user.u_id=u_r.u_id")->where("user.u_id=$arr[u_id]")->find();
            if($brr['r_id']==3){
                    $this->success('部门经理登陆成功',U('Index/index3'));
            }else if($brr['r_id']==2){
                   $this->success('人事经理登陆成功',U('Index/index2'));
            }else{
                $this->success('员工登陆成功',U('Index/index1'));
            }

        }
    }
}