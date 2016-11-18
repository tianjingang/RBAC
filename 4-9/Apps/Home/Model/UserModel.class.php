<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    public function deng($data){
        $ming=$data['ming'];
        $mi=$data['mi'];
        return $this->Table('user')->where("ming='$ming' and mi='$mi'")->find($data);
    }
}