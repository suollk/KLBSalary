<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 21:22
 */
class salaryController {
	public $auth;
	//起始登录函数
	//第一步判断是否有此员工信息  第一步是取
	//第二部判断此员工是否已经设置了密码
	public function index() {
		if (isset($_COOKIE["klbweixinuserid"])) {
			$userid = $_COOKIE['klbweixinuserid'];
		} else {
			exit ;
		}
		$salayM = M('salary');
		$mouthArr = $salayM -> getsalaryMouth($userid);
		if (!empty($mouthArr)) {
			if (isset($_GET["mouth"])) {
				$mouth = $_GET["mouth"];
			} else {
				$mouth = $mouthArr[0]["mouth"];
			}

			foreach ($mouthArr as $k => $v) {
				if ($mouth == $v["mouth"])
					unset($mouthArr[$k]);
			}

			VIEW::assign(array('mouth' => $mouth));
			$mouthdetailArr = $salayM -> getOneMonuthSalaryDetail($userid, $mouth);
			VIEW::assign(array('mouthdetailArr' => $mouthdetailArr));
		}
		VIEW::assign(array('mouthArr' => $mouthArr));
		VIEW::display("salarysearch.html");
	}

}
