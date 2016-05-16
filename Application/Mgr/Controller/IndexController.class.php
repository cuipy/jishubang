<?php
namespace Mgr\Controller;
use Think\Controller;

class IndexController extends Controller{

	//管理后台首页
	public function index(){
		$this->display();
	}
	
	//管理后台登录页面
	public function login(){
		$this->display();
	}
	
	//执行后台登录
	public function do_login(){
		
		
		//登录验证成功后，跳转到管理后台首页
		$this->show('{\"state\":\"error\","msg":"登录失败，登录帐号或密码错误"}');
	}

}


