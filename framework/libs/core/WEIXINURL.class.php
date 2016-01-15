<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 13:57
 * weixinurl 工厂类
 */

class WEIXINURL{
    public static $weixinfunction;



    public static function init($config){
        self::$weixinfunction = new weixinfunction;
        self::$weixinfunction->init($config);
    }

    public static function getAccessToken(){
        return self::$weixinfunction->getAccessToken();
    }

    public static function setAccessToken($atoken){
        self::$weixinfunction->setAccessToken($atoken);
    }

    public static function getuseridbycode($code)
    {
        return self::$weixinfunction->getuseridbycode($code);
    }
}