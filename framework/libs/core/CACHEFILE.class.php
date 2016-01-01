<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 14:17
 */

class CACHEFILE{
    public static $cachefile;

    public static function init(){
        self::$cachefile =new cachefile;
    }

    public static function cacheData($key, $value = '', $cacheTime = 0){
        return self::$cachefile->cacheData($key, $value, $cacheTime);
    }
}