<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function addd(){
        $data=I('post.');
        $m=D('User');
        $arr=$m->add($data);
        if($arr){
            $this->success('添加成功','Lst/lst');
        }else{
            $this->error('添加失败');
        }
    }

}