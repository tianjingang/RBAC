<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends  Controller{
    public function _initialize(){
        if(!session('?u_name')){
            $this->redirect('Login/login');
        }
    }
}