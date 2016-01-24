<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/23
 * Time: 23:15
 */
class adminindexController {

	public function index() {
		//初始化数据   获取userid usercode
		if (isset($_COOKIE["klbweixinuserid"])) {
			$userid = $_COOKIE['klbweixinuserid'];
			if (!isset($_COOKIE['klbweixinusercode'])) {
				//通过userid去user的信息
				$backArr = WEIXINURL::getuserinfobyuserid($userid);

				if ($backArr["errcode"] == "0" && $backArr["errmsg"] == "ok") {
					$usercode = $backArr["extattr"]["attrs"][0]["value"] != "" ? $backArr["extattr"]["attrs"][0]["value"] : "为空";
				} else {
					echo "获取人员信息失败" . $backArr["errcode"] . $backArr["errmsg"];
					exit ;
				}
			} else {
				$usercode = $_COOKIE['klbweixinusercode'];
			}
		} else {
			exit ;
		}

		$adminindexM = M('adminindex');
		$mydata = $adminindexM->index($userid,$usercode);

		VIEW::assign(array('mydata' => $mydata));
		VIEW::display('adminindex.html');
	}

}
