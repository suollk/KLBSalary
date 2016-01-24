<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/24
 * Time: 21:23
 */


class inquirelistController {

    public function index() {
        //初始化数据   获取userid usercode   二次改造出一个人员信息类
        if (isset($_COOKIE["klbweixinuserid"])) {
            $userid = $_COOKIE['klbweixinuserid'];
        } else {
            exit ;
        }

        $inquirylistM = M('inquirylist');
        $mydata = $inquirylistM->index($userid);

        VIEW::assign(array('inquiry' => $mydata['inquiry'],'inquiryhistory' => $mydata['inquiryhistory']));
        VIEW::display('inquirylist.html');
    }

}