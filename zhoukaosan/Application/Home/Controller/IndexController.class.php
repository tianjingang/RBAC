<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	    $id=session('id');
	    	$res=M('role')->join("l_r on role.r_id=l_r.r_id")
	    	              ->where(array("id"=>$id))->select();
        $this->assign('res',$res);
        $this->display();
    	
    }
    //分配角色
    function fenpei(){
    	if(!IS_POST){
	    	$arr=M('role')->select();
	    	$this->assign('arr',$arr);
	        $this->display();
    	}else{
    		
           $role=I('post.r_role');
           $res=M('role')->where(array('r_role'=>$role))->find();
            if($res){
               echo '1';
           }else{

           	   M('role')->add($_POST);
           	    echo 0;
           }
       
    	}
    }
     //角色权限分配
    function quanxian(){
    	if(!IS_POST){
	    	$arr=M('pivilege')->select();
	    	$res=M('role')->select();
	    	$this->assign('arr',dealArr($arr));
	    	$this->assign('res',$res);
	        $this->display();
    	}else{
           $r_id=I('post.r_id');
           $p_id=I('post.p_id');
             foreach($p_id as $k=>$v){
               $data[$k]['p_id']=$v;
                $data[$k]['r_id']=$r_id;
           }
            M("r_p")->where(array('r_id'=>$r_id))->delete();
            $info = M("r_p")->addAll($data);
           if($info){
                 $this->success("分配权限成功");
           }else{
                 $this->success("分配权限失败");

           }
    	}
    }
    //角色默认
    public function uquery(){
          $r_id=I('post.r_id');
        $date=M('pivilege')->join("r_p on r_p.p_id=pivilege.p_id")->
              where(array('r_id'=>$r_id))->select();
           echo json_encode($date);
  }
     //用户添加
    function adduser(){
    	if(!IS_POST){
	    	$res=M('role')->select();
	    	$this->assign('res',$res);
	        $this->display();
    	}else{
            $data['r_id']=I('post.r_id');
            $id=session('id');
	    	$res1=M('role')->join("l_r on role.r_id=l_r.r_id")
	    	              ->where(array("id"=>$id))->find();
            if($res1['r_id']<$data['r_id']){
	             $arry['username']=I('post.username');
	             $arry['pwd']=I('post.pwd');
	             $res=M('login')->add($arry);
                 $data['id']=$res['id'];
                 $arr=M('l_r')->add($data);
             if($arr){
                 $this->success("分配用户成功");
             }else{
                 $this->error("分配用户失败");

           }
	    	 }else{
	    	 	$this->error("你得权限不能添加比你高的角色");
	    	 }         
           }
    	
    }
}