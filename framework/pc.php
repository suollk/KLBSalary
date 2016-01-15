<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-06
 * Time: 23:45
 * MVC引擎启动文件
 */
 //获取当前目录
 $currentdir = dirname(__FILE__);
 include_once($currentdir.'/include.list.php');
 foreach($path as $paths){
     include_once($currentdir.'/'.$paths);
 }
 class PC{
     public static $controller;
     public static $method;
     private static $config;
     private static function init_db(){
        DB::init('mysql',self::$config['dbconfig']);
     }

     private static function init_view(){
        VIEW::init('Smarty',self::$config['viewconfig']);
     }

     private static function init_cachefile(){
         CACHEFILE::init();
     }

     private static function init_weixinurl(){
         WEIXINURL::init(self::$config['weixinurlconfig']);
     }

     private static function init_controller(){
         self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
     }

     private static function init_method(){
         self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
     }

     public static function run($config){
         self::$config = $config;
         self::init_db();
         self::init_view();
         self::init_cachefile();
         self::init_weixinurl();
         self::init_controller();
         self::init_method();
         C(self::$controller,self::$method);
     }
 }