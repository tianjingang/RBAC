<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display('User/user');
    }
    public function index1(){
        /*$u_name=session('username');
        $abc=M('privilege');
        $data=$abc->join("r_p on r_p.p_id=privilege.p_id ")
                  ->join("role on role.r_id=r_p.r_id")
                  ->join("u_r on role.r_id=u_r.r_id")
                  ->join("user on user.u_id=u_r.u_id")
                  ->where("u_name='$u_name'")
                  ->select();
        $this->assign('data',$data);*/
        $this->display();

    }
}