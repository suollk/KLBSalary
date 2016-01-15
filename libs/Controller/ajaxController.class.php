<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 12:55
 */

class ajaxController {
	//用户登录
	public function checklogin() {
		$auth = M('auth');
		$userpass = base64_decode($_GET["hash"]);
		$userpass = rtrim(trim($userpass), "||" . session_id());

		$result = $auth -> checkajaxauth($_COOKIE['klbweixinuserid'], $userpass);
		echo $_GET["jsoncallback1"] . '({"result":"' . $result . '"})';
	}

	public function getmouthdetail() {
		$salaryM = M('salary');
		$result = $salaryM -> getOneMonuthSalaryDetail($_COOKIE['klbweixinuserid'], $_GET["mouth"]);
		echo $_GET["jsoncallback1"] . '({"result":"' . $result . '","data":"' . json_encode($result) . '"})';
	}


	public function imgupload() {
		$imgupload = M('form');
		$result= $imgupload -> imgupload();
		echo '{'.json_encode($result).'}';
	}

}
