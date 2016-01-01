<?php

class indexController
{
    //起始登录函数
    //第一步判断是否有此员工信息  第一步是取
    //第二部判断此员工是否已经设置了密码
    function index()
    {
        //优先判断进入方式  是否为auth2.0进入网页
        $usercode = $_GET("code");
        if (!empty($usercode) || !isset($usercode) || $usercode == '' || $usercode == null) {
            //表示为auth2.0进入  通过code获得userid
            $backArr = WEIXINURL::getuseridbycode($usercode);
            $userid = $backArr["userid"];
            //将userid存入cookie
            setcookie("klbweixinuserud", $userid, 3600 * 24 * 7);
        }

        //判断是否存在cookie
        $userid = $_COOKIE['klbweixinuserud'];
        if (empty($userid) || !isset($userid) || $userid == '' || $userid == null) {
            //未取到cookie的值页面重定向回去auth2.0
            //重定向浏览器
            header("location: http://bbs.lampbrother.net");
            //确保重定向后，后续代码不会被执行
            exit;
        }

        //到此步已经确定具备userid


    }
}

?>