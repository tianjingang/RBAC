<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $this->display();
    }
    //添加
function add(){
   // var_dump($_POST);die;
    $r_name=I('post.r_name');
    $r_course=I('post.r_course');
    $r_courses=implode(',',$r_course);
    $data=array(
        "r_name"=>$r_name,
        "r_course"=>$r_courses
    );
    $res=D('Course')->add( $data);
   // var_dump($res);die;
    if($res){
        $this->success('添加成功',U('Index/show'));
    }
    else{
        $this->error('添加失败');
    }
}
    //查询
    function show(){
        $arr=D('Course')->show();
        $this->assign('arr',$arr);
        $this->display();
    }
    //查询单条
    function showone(){
        $id=$_GET['id'];
        $ar=D('Course')->where(array('id'=>$id))->look();
        $this->assign('ar',$ar);
        $this->display();
    }
    //修改
    function update(){
        $id=$_POST['id'];
        $r_course=$_POST['r_course'];
        $res=D('Course')->where(array('id'=>$id))->save(array('r_course'=>$r_course));
        if($res){
            $this->success('修改成功',U('Index/show'));
        }
        else{
            $this->error('修改失败');
        }
    }
}