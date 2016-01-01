<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 13:57
 * weixinurl 工厂类
 */

class WEIXINURL{
    public static $weixinurl;

    public static function init($config){
        self::$weixinurl = new weixinurl;
        self::$weixinurl->init($config);
    }

    public static function getAccessToken(){
        return self::$weixinurl->getAccessToken();
    }

    public static function setAccessToken($atoken){
        self::$weixinurl->setAccessToken($atoken);
    }

    public static function getuseridbycode($code)
    {
        return self::$weixinurl->getuseridbycode($code);
    }
}