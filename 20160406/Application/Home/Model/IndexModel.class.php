<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
    public function saves($tid){
        $data['tai']=0;
        return $this->Table('tiaoxin')->where("tid='$tid'")->save($data);
    }
    public function savess($tid){
        $data['tai']=1;
        return $this->Table('tiaoxin')->where("tid='$tid'")->save($data);
    }
}