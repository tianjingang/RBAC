<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    public function lstt(){
        return $this->Table('Lst')->where('tai=1')->select();
    }
}