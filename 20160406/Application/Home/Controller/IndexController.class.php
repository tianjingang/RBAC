<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->display();
    }
    public function deng(){
        $data=I('post.');
        $m=D('User');
        $arr=$m->where("uname='$data[uname]' and upwd='$data[upwd]'")->find();
        if($arr){
            session('uname',$arr['uname']);
            session('upwd',$arr['upwd']);
            session('uid',$arr['uid']);
            $this->success('登录成功',U('Index/lst'));
        }
        else{
            $this->error('登录失败');
        }
    }       public function lst(){
        $uname=session('uname');
       /* $m=D('Lst');
        $arr=$m->select();*/
        $abc=M('role');


       /* $this->assign('arr',$arr);
        $this->display();*/
    }
    public function shen(){
        $data['tai']=0;
        $m=D('Lst');
        $arr=$m->save($data);
        if($arr){
            $this->success('审核成功');
        }else{
            $this->error('审核失败');
        }
    }
    public function shenn(){
        $tid=$_GET['tid'];
        $m=D('Lst');
        $arr=$m->savess($tid);
        if($arr){
            $this->success('审核成功');
        }else{
            $this->error('审核失败');
        }
    }
}