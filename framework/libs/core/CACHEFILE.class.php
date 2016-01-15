<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 14:17
 */

class CACHEFILE{
    public static $cache;

    public static function init(){
        self::$cache =new cache;
    }

    public static function cacheData($key, $value = '', $cacheTime = 0){
        return self::$cache->cacheData($key, $value, $cacheTime);
    }
}