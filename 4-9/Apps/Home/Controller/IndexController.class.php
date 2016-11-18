<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    function deng(){
        $data=I('post.');
        $m=D('user');
        $arr=$m->deng($data);
        if($arr){
            session('uid',$arr['uid']);
            session('ming',$arr['ming']);
            $this->success('登陆成功',U('Index/show'));
        }
        else{
            $this->error('登录失败');
        }

    }
    function show(){
        $uid=session('uid');
       // echo $uid;die;
        $ming=session('ming');
       // echo $ming;die;
        $m=D('user');
        $arr=$m->field('user.ming,privilege.pming,role.rming')
            ->join("u_p on user.uid=u_p.uid")
            ->join("privilege on privilege.pid=u_p.pid")
            ->join("r_u on user.uid=r_u.uid")
            ->join("role on role.rid=r_u.rid")
            ->where("user.uid='$uid'")
            ->select();
        //print_r($arr);die;
        $this->assign('arr',$arr);
        $this->assign('ming',$ming);
        $this->display();
    }
}