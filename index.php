<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 10:57
 * 登录入口
 */
header("Content-type:text/html;charset=utf-8");
session_start();
require_once ("config.php");
require_once ("framework/pc.php");
PC::run($config);
