<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-15
 * Time: 21:48
 */

//调用控制类
function C($name, $method)
{
    require_once('libs/Controller/' . $name . 'Controller.class.php');
    eval('$obj = new ' . $name . 'Controller();$obj->' . $method . '();');
}

//调用模型方法
function M($name)
{
    require_once('libs/Model/' . $name . 'Model.class.php');
    eval('$obj = new ' . $name . 'Model();');
    return $obj;
}

//调用视图方法--------------基本不用  第三方库不完整
function V($name)
{
    require_once('libs/View/' . $name . 'View.class.php');
    eval('$obj = new ' . $name . 'View();');
    return $obj;
}
//addslashes   对单引号等特殊符号进行转义
//addslashes只有一个参数-字符串
//addcslashes需要两个参数，字符串，分隔符.
//注意区别
//magic_quotes_gpc函数在php中的作用是判断解析用户提示的数据，
//如包括有:post、get、cookie过来的数据增加转义字符“\”，以确保这些数据不会引起程序，
//特别是数据库语句因为特殊字符引起的污染而出现致命的错误
function daddslashes($str){
   return (!get_magic_quotes_gpc())?addslashes($str):$str;
}

///操作第三方类库需要用到的函数
function _ORG($path,$name,$paramArr=array()){
    require_once("../libs/ORG/".$path.$name.".class.php");

    $obj = new $name;
    if(!empty($paramArr)){
        foreach($paramArr as $k=>$val){
           $obj->$k=$val;
        }
    }
    return $obj;
}


