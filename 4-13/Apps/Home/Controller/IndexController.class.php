<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display('Login/login');
    }
    //员工登录
    function index1(){
        //接session的id和值
        $u_name=session('u_name');
        $u_id=session('u_id');
        //实例化工资表
        $abc=M('pay');
        //四表联查
        $data=$abc->join("user on pay.u_id=user.u_id")
            ->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("pay.u_id='$u_id'")
          ->find();//用户和工资表
        $this->assign('data',$data);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //申请调薪
    function index1_pro(){
        //接session值
        $u_name=session('u_name');
        $u_id=session('u_id');
        //实例化工资表
        $abc=M('pay');
        $data=$abc->join("user on pay.u_id=user.u_id")
            ->join("u_r on user.u_id=u_r.u_id")
            ->join("role on u_r.r_id=role.r_id")
            ->where("pay.u_id='$u_id'")
            ->find();
        $this->assign('data',$data);
        $this->assign('u_name',$u_name);
        $this->display();
    }
    //调薪
    function index1_pro1(){
        $u_id=session('u_id');
        $data=I('get.');
        $pay=M('pay');
        $re=$pay->where("u_id='$u_id'")->save($data);
        if($re){
            $this->redirect("Index/index1");
        }
        else{
            echo 1;
        }
    }
    //人事登录
    function index2(){
         $m=D('user');
        $arr=$m->join("pay on user.u_id=pay.u_id")->where("p_status=1")->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    //部门登录
    function index3(){
        $m=D('user');
        $arr=$m->join("pay on user.u_id=pay.u_id")->where("p_shenfen=0")->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    //初审通过
    function index3_pass(){
        $id=$_GET['id'];
        $data['p_status']=1;
        $m=D('pay');
        $arr=$m->where("u_id='$id'")->save($data);
        if($arr){
            $this->redirect('Index/index3');
        }
        else{
            echo "初审申请通过失败";
        }
    }
    //初审不通过
   function index3_pass_no(){
       $id=$_GET['id'];
       //echo $id;die;
       $data['p_status'] = -1;
       $m=D('pay');
       $arr=$m->where("u_id='$id'")->save($data);
       if($arr){
           $this->redirect('Index/index3');
       }
       else{
           echo "初审不通过申请失败";
       }
   }
    //二审通过
    function index3_passs(){
        $id=$_GET['id'];
        $data['p_status']=2;
        $m=D('pay');
        $arr=$m->where("u_id='$id'")->save($data);
        if($arr){
            $this->redirect('Index/index2');
        }
        else{
            echo "二审失败";
        }

    }
    //二审不通过
    function index3_pass_noo(){
        $id=$_GET['id'];
       //echo $id;die;
        $data['p_status'] = -1;
        $m=D('pay');
        $arr=$m->where("u_id='$id'")->save($data);
        if($arr){
            $this->redirect('Index/index2');
        }
        else{
            echo "二审失败";
        }

    }

}