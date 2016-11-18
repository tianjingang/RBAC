<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
      public function _initailize(){
          if(!session('?username')){
              $this->redirect('User/user', 2,'', '请先登录...');
          }
      }

}