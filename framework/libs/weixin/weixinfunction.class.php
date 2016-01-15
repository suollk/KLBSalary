<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 13:58
 * 微信企业号通过URL获取的数据底层公共单元
 * 此函数只管调用   不管如何使用
 */

class weixinfunction{
    private $corpid;
    private $corpsecret;
    private $weixinurl;
    private $accesstoken;

    function err($error)
    {
        die("发生错误:" . $error);
    }

    function geturlinfoback($url){
        $data = getCurl($url);//通过自定义函数getCurl得到https的内容
        $resultArr = json_decode($data, true);//转为数组

        return $resultArr;
    }

    function init($weixinconfigArr){
        $this->weixinurl=$weixinconfigArr["weixinurl"];
        $this->corpid=$weixinconfigArr["corpid"];
        $this->corpsecret=$weixinconfigArr["corpsecret"];
    }

    function setAccessToken($atoken){
        $this->accesstoken = $atoken;
    }

    function getAccessToken(){
       //获取accesstoken
        $url = $this->weixinurl."/cgi-bin/gettoken?corpid="
              .$this->corpid."&corpsecret=". $this->corpsecret;

        return $this->geturlinfoback($url);
    }

    function getuseridbycode($code){
        $url = $this->weixinurl."/cgi-bin/user/getuserinfo?access_token="
            .$this->accesstoken."&code=".$code;

        return $this->geturlinfoback($url);
    }

    function getuserinfobyuserid($userid){
        $url = $this->weixinurl."/cgi-bin/user/get?access_token="
            .$this->accesstoken."&userid=".$userid;

        return $this->geturlinfoback($url);
    }
}