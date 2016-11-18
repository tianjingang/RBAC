<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller
{
    public function tian()
    {
        $img=$_FILES['tu'];
        $upload = new \Think\Upload();// 实例化上传类`````````````````1
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = '/Public/Uploads/';
        $info = $upload->uploadOne($img);
        if (!$info) {
            $this->error($upload->getError());
        } else {
            $_POST['tu'] = $info['savepath'] . $info['savename'];
            $yin = I('post.yin');
            $tu = $_POST['tu'];
            $data = array(
                "yin" => $yin,
                "tu" => $tu,
            );
            $m = D('pay');
            $arr = $m->add($data);
            if ($arr) {
                $this->success('申请成功',U('Index/lst4'));
            } else {
                $this->error('申请失败');
            }
        }
    }

}