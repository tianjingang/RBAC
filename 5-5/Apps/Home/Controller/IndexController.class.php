<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Login/login');
    }
    public function implode(){
        $arr=D('package')->order('p_order asc')->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    //添加
    public function add(){
        $data=I('post.');
        $res=D('package')->add($data);
        if($res){
            $this->success('添加成功',U('Index/implode'));

        }
        else{
            echo 0;
        }
    }

}