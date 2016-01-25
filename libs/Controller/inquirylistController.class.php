<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/24
 * Time: 21:23
 */


class inquirylistController {

    public function index() {
        //初始化数据   获取userid usercode   二次改造出一个人员信息类
        if (isset($_COOKIE["klbweixinuserid"])) {
            $userid = $_COOKIE['klbweixinuserid'];
        } else {
            exit ;
        }

        if(isset($_GET["from"])){
            VIEW::assign(array("modal"=>"show"));
        }else{
            VIEW::assign(array("modal"=>""));
        }

        $inquirylistM = M('inquirylist');
        $mydata = $inquirylistM->index($userid);

        VIEW::assign(array('inquiry' => $mydata['inquiry'],'inquiryhistory' => $mydata['inquiryhistory']));
        VIEW::display('inquirelist.html');
    }

}