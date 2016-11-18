<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Login/login');
    }
    public function student(){
        $arr=D('class')->select();
        $this->assign('class',$arr);
        $this->display();
    }
    //学生选班级
    public function add_class(){
        $l_id=I('post.l_id');
        $u_id=session('u_id');
        $ac=D('u_l');
        $data['u_id'] = $u_id;
        $data['l_id'] = $l_id;
        $res = $ac->add($data);
        if($res){
            $this->success('添加班级成功',U('Index/show_class'));
        }
        else{
            $this->error('添加班级失败');
        }
    }
    //学生课程信息显示
    public function show_class(){
        //获取登录者id
        $u_id=session('u_id');
        //查出登录者u_l表中的l_id
        $res=D('u_l')->where(array('u_id'=>$u_id))->find();
        //根据登录者u_l表中的l_id查出班级表里的班级
        $res1=D('class')->where(array('l_id'=>$res['l_id']))->find();
        //根据登录者u_l表中的l_id查出课程和讲师
        $res2=D('t_cl')
            ->join('user on user.u_id=t_cl.t_id')
            ->join('course on course.c_id = t_cl.c_id')
            ->where(array('l_id'=>$res['l_id']))
            ->select();
        $this->assign('res2',$res2);
        $this->assign('res1',$res1);
        $this->display();
    }
    //讲师代课信息显示
    public function show_teacher(){
        //获取登录者id
        $u_id=session('u_id');
        $res2=D('t_cl')
            ->join('course on course.c_id=t_cl.c_id')
            ->join('class on class.l_id=t_cl.l_id')
            ->where(array('t_id'=>$u_id))
            ->select();
        //echo D('t_cl')->_sql();die;
        $this->assign('res2',$res2);
        $this->display();

    }
    //主任登录
    public function leader(){
       $arr=M('user')->join('u_r on user.u_id=u_r.u_id')->where(array('r_id'=>2))->select();
        $br=D('course')->select();
        $cr=D('class')->select();
        $this->assign('ar',$arr);
        $this->assign('br',$br);
        $this->assign('cr',$cr);
        $this->display();
    }
    //主任排课
    public function leader_fen(){
        $t_id=I('post.t_id');
        //echo $t_id;die;
        $c_id=I('post.c_id');
        // print_r($c_id);exit;
        //var_dump($c_id);die;
        $l_id=I('post.l_id');
        // echo $l_id;die;
        $t_cl=D('t_cl');
        $data['t_id']=$t_id;
        $data['c_id']=$c_id;
        $data['l_id']=$l_id;
        /*for($i = 0;$i<count($c_id);$i++){
            $data['c_id'] = $c_id[$i];
            $res=$t_cl->add($data);
        }*/
        $res=$t_cl->add($data);
        if($res){
            $this->success('主任排课成功');
        }
        else{
            $this->error('排课失败');
        }
    }

}