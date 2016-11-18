<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LstController extends Controller {
    public function lst(){
        $data=I('post.');
        $m=D('Lst');
        $arr=$m->add($data);
        if($arr){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    
}