<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-01
 * Time: 12:54
 */
//取accesstoken模型
class accesstokenModel{
    function getaccesstoken(){
        if(!$cacheaccesstoken = CACHEFILE::cacheData("access_token"))
        {
            $resultArr = WEIXINURL::getAccessToken();
            if($resultArr) {
                $cacheaccesstoken = $resultArr["access_token"];
                WEIXINURL::setAccessToken($cacheaccesstoken);
                CACHEFILE::cacheData("access_token", $cacheaccesstoken, 1200);
            }
        }else{
            WEIXINURL::setAccessToken($cacheaccesstoken);
        }

        return $cacheaccesstoken;
    }
}