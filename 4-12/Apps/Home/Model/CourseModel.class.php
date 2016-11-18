<?php
namespace Home\Model;
use Think\Model;
class CourseModel extends Model {
   protected $table='Course';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //查询
    function show(){
        return M($this->table)->select();
    }
    //查询单条
    function look($where){
        return M($this->table)->where($where)->find();
    }
    //修改
    function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}