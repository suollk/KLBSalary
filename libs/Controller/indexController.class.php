<?php

class indexController {
	public $authurl = "http://219.235.31.101/";
	//起始登录函数
	//第一步判断是否有此员工信息  第一步是取
	//第二部判断此员工是否已经设置了密码
	public function index() {
		//进入后就调用acctoken方法 确保 acctoken够新
		$acctokenModel = M("accesstoken");
		$acctokenModel -> getaccesstoken();
		//优先判断进入方式  是否为auth2.0进入网页
		if (!isset($_GET["code"])) {
			//表示为auth2.0进入  通过code获得userid
			//            $backArr = WEIXINURL::getuseridbycode($_GET["code"]);
			//            if(isset($backArr['userid'])){
			//                $userid = $backArr['userid'];
			//            }else{
			//                jumpurl($this->authurl);
			//            }

			$userid = "zhanghaixuan";
			//将userid存入cookie
			setcookie("klbweixinuserid", $userid, time() + 3600 * 24 * 7);
		}

		//判断是否存在cookie
		if (isset($_COOKIE["klbweixinuserid"])) {
			$userid = $_COOKIE['klbweixinuserid'];
		} else {
			jumpurl($this -> authurl);
			exit ;
		}
		//到此步已经确定具备userid
		//第一步是判断用户是否已经设置了密码
		$authobj = M('auth');
		if ($authobj -> checkauth($userid, '') == "") {
			//空密码
			//注册变量填充模版
			VIEW::assign(array('visable' => ''));
			VIEW::assign(array('title' => '确认'));
		} else {
			//非空密码
			VIEW::assign(array('visable' => ' uk-hidden '));
			VIEW::assign(array('title' => '登录'));
		}
		setcookie("klbweixinusersessionid", session_id(), time() + 3600 * 24);
		VIEW::display('index.html');
	}

}
?>