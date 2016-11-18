<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    //验证登录
    public function login_check(){
        //接值
        $data=I('post.');
        //与数据库里值匹配
        $arr=D('user')->where("u_name='$data[u_name]' and u_pwd='$data[u_pwd]'")->find();
        if($arr){
            //赋值session
            session('u_id',$arr['u_id']);
            session('u_name',$arr['u_name']);

        }
        else{
            $this->error('用户名或密码不正确');
        }
        //判断角色
        $brr=D('user')->join('u_r on user.u_id=u_r.u_id')->where("user.u_id=$arr[u_id]")->find();
        if($brr['r_id']==1){
            $this->success('运营人员登陆成功',U('Index/show'));
        }
        else{
            $this->success('编辑人员登陆成功',U('Index/show'));

        }

    }
    //展示页面
    public function show(){
        $arr=M('package')->order('p_order asc')->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    //添加友情链接
    public function add(){
        $data=M('package')->add($_POST);
        if($data){
           $this->success('添加成功');
        }
        else{
            $this->error('添加失败');
        }
    }
    //退出登录
    public function out(){
        session('null');
        $this->success('退出登录成功',U('Index/index'));
    }


}