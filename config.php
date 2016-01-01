<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-15
 * Time: 21:39
 */

$config = array(
    "viewconfig"=>array("left_delimiter"=>"{",
    "right_delimiter" => "}",
    "template_dir" => "tpl",
    "compile_dir" => "data/template_c"),
    "dbconfig"=>array("dbhost"=>"127.0.0.1",
    "dbuser"=>"root",
    "dbpsw"=>"",
    "dbname"=>"template",
    "dbcharset"=>"utf-8"),
    "weixinconfig"=>array("token"=>"4u98neBc7YRND1OwvMiXzhBqp0P8NJT5SFyrwg13BDA",
    "encodingAesKey"=>"Ce7CGSs7G6peAyXpMkx4r",
    "corpId"=>"corpId"),
    "weixinurlconfig"=>array("corpid"=>"wx96475c9ad190e02b",
    "corpsecret"=>"EO_BTxdJP2angu5XZmeZVno5xM2sIW_BDfFzzkb-gZOaB0BBeRGWpUGK5FzFhqjz",
    "weixinurl"=>"https://qyapi.weixin.qq.com"));