<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Login/login');
    }
    public function student_add(){
        $this->display();
    }
    public function student_tian(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath='./';
        $upload->savePath  =      '/Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
        $info   =   $upload->uploadone($_FILES['photo']);
        $_POST['photo']= $info['savepath'].$info['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{
            //接其他值
            $p_reson=I('post.p_reson');
            $photo= $_POST['photo'];
            //放到数组里
            $data=array(
                "photo"=>$photo,
                "p_reson"=>$p_reson
            );
            $res=D('pay')->add($data);
            if($res){
                $this->success('申报成功');
            }
            else{
                $this->error('申报失败');
            }
;        }
    }
    public function student_show(){
        $arr=D('pay')->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    public function teacher(){
        $arr=D('pay')->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    public function chushen(){
       $ping=I('post.ping');

    }
    public function leader(){
        $arr=D('pay')->select();
        $this->assign('arr',$arr);
        $this->display();
    }


}