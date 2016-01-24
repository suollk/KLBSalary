<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-15
 * Time: 21:39
 */

$config = array(
//   模版设置声明
"viewconfig" => array(
//   模版左定界符
"left_delimiter" => "{[",
//   模版右定界符
"right_delimiter" => "]}",
//   模版路径
"template_dir" => "tpl",
//   模版生成路径
"compile_dir" => "data/template_c"),
//   数据库配置参数
"dbconfig" => array(
//   数据库IP地址
"dbhost" => "localhost",
//  数据库用户名
"dbuser" => "root",
//  数据库密码
"dbpsw" => "",
//  数据库名
"dbname" => "kanglebao",
//   数据库默认字符集
"dbcharset" => "utf8",
//数据库端口号
"port"=>"3308"),
//微信自动回复事件等
 "weixinconfig" => array(
//   微信默认参数
"token" => "4u98neBc7YRND1OwvMiXzhBqp0P8NJT5SFyrwg13BDA", "encodingAesKey" => "Ce7CGSs7G6peAyXpMkx4r", "corpId" => "wx96475c9ad190e02b"),
//   微信权限默认参数
"weixinurlconfig" => array(
//   微信企业串
"corpid" => "wx96475c9ad190e02b",
//   微信安全码
"corpsecret" => "EO_BTxdJP2angu5XZmeZVno5xM2sIW_BDfFzzkb-gZOaB0BBeRGWpUGK5FzFhqjz",
//    微信应用id
"appid"=>"5",
//   微信企业号默认信息获取路径
"weixinurl" => "https://qyapi.weixin.qq.com"));
