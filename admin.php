<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-07
 * Time: 0:16
 */
  header("Content-type:text/html;charset=utf-8");
  session_start();
  require_once("config.php");
  require_once("framework/pc.php");
  PC::run($config);