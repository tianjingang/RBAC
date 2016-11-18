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
        $m=D('user');
        $arr=$m->where("uname='$data[uname]' and upwd='$data[upwd]'")->find();
        if($arr){
            session('uid',$arr['uid']);
            session('uname',$arr['uname']);
            $brr=$m->join("u_r on user.uid=u_r.uid")->where("user.uid=$arr[uid]")->find();
           if($brr['rid']==3){
               $this->success('主任登陆成功',U('lst3'));
           }else if($brr['rid']==2){
               $this->success('讲师登陆成功',U('lst2'));
           }else{
                $this->success('学生登陆成功',U('lst4'));
            }

        }else{
            $this->error('登录失败');
        }
    }
    public function lst(){
        $uname=session('uname');
       //$this->assign('uname',$uname);
        $this->display();
    }
    public function lst2(){
        $uname=session('uname');
        $m=D('pay');
        $data=$m->where("tai=0")->select();
        //var_dump($data);die;
        $this->assign('data',$data);
        $this->display();
    }
    public function lst3(){
        $uname=session('uname');
        $m=D('pay');
        $data=$m->where("tai=1")->select();
        //var_dump($data);die;
        $this->assign('data',$data);
        $this->display();
    }
    public function lst4(){
        $uname=session('uname');
        $m=D('pay');
        $data=$m->select();
        //var_dump($data);die;
        $this->assign('data',$data);
        $this->display();
    }
    public function lst2_pass(){
        $id=$_GET['id'];
        //alert($id);die;
        $data['tai']=1;
        $m=D('pay');
        $arr=$m->where("uid='$id'")->save($data);
        if($arr){
            $this->redirect('lst2');
        }
    }
    public function lst2_pass_no(){
        $id=$_GET['id'];
        //alert($id);die;
        $data['tai']=-1;
        $m=D('pay');
        $arr=$m->where("uid='$id'")->save($data);
        if($arr){
            $this->redirect('lst2');
        }
    }
    public function lst3_pass(){
        $id=$_GET['id'];
        //alert($id);die;
        $data['tai']=2;
        $m=D('pay');
        $arr=$m->where("uid='$id'")->save($data);
        if($arr){
            $this->redirect('lst3');
        }
    }
    public function lst3_pass_no(){
        $id=$_GET['id'];
        //alert($id);die;
        $data['tai']=-1;
        $m=D('pay');
        $arr=$m->where("uid='$id'")->save($data);
        if($arr){
            $this->redirect('lst3');
        }
    }
}