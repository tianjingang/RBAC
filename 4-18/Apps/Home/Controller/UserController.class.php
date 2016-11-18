<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    public function user(){
        $this->display();
    }
    //登录验证
    function user_check(){
        $data=I('post.u_name');
        $pwd=I('post.u_pwd');
        /*$m=M('user');
        $arr=$m->where(array('u_name'=>$data['u_name']))->find();*/
        $abc=M('privilege');
        $arr=$abc->join("r_p on r_p.p_id=privilege.p_id ")
            ->join("role on role.r_id=r_p.r_id")
            ->join("u_r on role.r_id=u_r.r_id")
            ->join("user on user.u_id=u_r.u_id")
            ->where("u_name='$data'")
            ->select();
        if($arr){
                $this->assign('data',$arr);
                $this->display('index1');

        }
        else{
            $this->error("用户名不存在");
        }
       /* $ar=$m->join("u_r on user.u_id=u_r.u_id")->where("user.u_id=$arr[u_id]")->find();
        if($ar['r_id']=1){
            $this->success('讲师登陆成功',U('Index/index1'));
            die;
        }
        if($ar['r_id']=2){
            $this->success('主任登陆成功',U('Index/index2'));
            die;
        }*/
    }

}