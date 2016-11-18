<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $this->display('Login/login');
    }
    //校长登陆成功
    function index1(){
        $u_id=session('u_id');
        $u_name=session('u_name');
        $m=D('user');
        $data=$m->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("user.u_id='$u_id'")->find();
        $role=$data['r_name'];
        $this->assign('data',$data);
        $this->assign('role',$role);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //院长登陆成功
    function index2(){
        $u_id=session('u_id');
        $u_name=session('u_name');
        $m=D('user');
        $data=$m->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("user.u_id='$u_id'")->find();
        $role=$data['r_name'];
        $this->assign('data',$data);
        $this->assign('role',$role);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //督查登陆成功
    function index3(){
        $u_id=session('u_id');
        $u_name=session('u_name');
        $m=D('user');
        $data=$m->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("user.u_id='$u_id'")->find();
        $role=$data['r_name'];
        $this->assign('data',$data);
        $this->assign('role',$role);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //主任登陆成功
    function index4(){
        $u_id=session('u_id');
        $u_name=session('u_name');
        $m=D('user');
        $data=$m->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("user.u_id='$u_id'")->find();
        $role=$data['r_name'];
        $this->assign('data',$data);
        $this->assign('role',$role);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //分配权限
    function index5(){
        $u_id=session('u_id');
        $u_name=session('u_name');
        $m=D('role');
       $arr=$m->select();
        $data=M('power')->select();
        //var_dump($data);die;
        $this->assign('data',dealArr($data));
        $this->assign('ar',$arr);
        $this->display();
    }
}