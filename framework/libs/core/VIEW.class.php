<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-06
 * Time: 23:26
 * 视图工厂类
 */

class VIEW{
    public static $view;

    public static function init($viewtype,$configArr){
        self::$view = new $viewtype;
        foreach($configArr as $key=>$value){
            self::$view->$key=$value;
        }
    }

    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key,$value);
        }
    }

    public static function display($template){
        self::$view->display($template);
    }
}

