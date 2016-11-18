<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        if(!session('?uname'))
        	$this->redirect("Login/login");
    }
}