<?php

/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 21:22
 */
class salaryController
{
    public $auth;
    //起始登录函数
    //第一步判断是否有此员工信息  第一步是取
    //第二部判断此员工是否已经设置了密码
    public function index()
    {
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
                    exit;
                }
            } else {
                $usercode = $_COOKIE['klbweixinusercode'];
            }
        } else {
            exit;
        }
        //获取当前数据库存在此用户有数据的年月
        $salayM = M('salary');
        $monthArr = $salayM->getsalaryMonth($usercode);

        if (!empty($monthArr)) {
            if (isset($_GET["year"]) && isset($_GET["month"])) {
                $year = $_GET["year"];
                $month = $_GET["month"];
            } else {
                $year = $monthArr[0]["year"];
                $month = $monthArr[0]["month"];
            }

            foreach ($monthArr as $k => $v) {
                if ($month == $v["month"] && $year == $v["year"])
                    unset($monthArr[$k]);
            }

            VIEW::assign(array('year' => $year, 'month' => $month));
            $monthdetailArr = $salayM->getOneMonthSalaryDetail($usercode, $year, $month);
            VIEW::assign(array('monthdetailArr' => $monthdetailArr));
        }
        VIEW::assign(array('monthArr' => $monthArr));
        VIEW::display("salarysearch.html");
    }

}
