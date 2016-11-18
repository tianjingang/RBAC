<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
      public function _initialize(){
          if(empty($_SESSION['u_id'])){
           $this->redirect('Login/login');
          }
      }
}