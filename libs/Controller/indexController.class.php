<?php

class indexController {
	public $authurl = "http://219.235.31.101/";
	//起始登录函数
	//第一步判断是否有此员工信息  第一步是取
	//第二部判断此员工是否已经设置了密码
	public function index() {
		//进入后就调用acctoken方法 确保 acctoken够新  --相当于人员进入登录的时候都会对accesstoken刷新一次
		// 如果缓存有accesstoken  则取缓存
		$acctokenModel = M("accesstoken");
		$acctokenModel -> getaccesstoken();
		//优先判断进入方式  是否为auth2.0进入网页
		if (isset($_GET["code"])) {
			//表示为auth2.0进入  通过code获得userid
			$backArr = WEIXINURL::getuseridbycode($_GET["code"]);
			if(isset($backArr['userid'])){
//				成功取得useid
				$userid = $backArr['userid'];
			}else{
//				失败再次刷新地址
				jumpurl($this->authurl);
			}
			//将userid存入cookie
			setcookie("klbweixinuserid", $userid, time() + 3600 * 24 * 7);
		}

		if(!isset($userid)){
		//判断是否存在cookie
			if (isset($_COOKIE["klbweixinuserid"])) {
				$userid = $_COOKIE['klbweixinuserid'];
			} else {
				jumpurl($this -> authurl);
				exit ;
			}
		}

		//通过userid去user的信息
		$backArr =  WEIXINURL::getuserinfobyuserid($userid);

		if($backArr["errcode"]=="0" && $backArr["errmsg"]=="ok"){
			$usercode = $backArr["extattr"]["attrs"][0]["value"]!=""?$backArr["extattr"]["attrs"][0]["value"]:"为空";

			VIEW::assign(array('username' => $backArr["name"],
				'usercode' => $usercode,
				'avatarimg' => $backArr["avatar"]
				));
			setcookie("klbweixinusername", $backArr["name"], time() + 3600 * 24 * 7);
			setcookie("klbweixinusercode", $usercode, time() + 3600 * 24 * 7);
		}else{
			echo "获取人员信息失败".$backArr["errcode"].$backArr["errmsg"];
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