<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-18
 * Time: 16:09
 */
function smarty_block_test2($params,$content){
  if ($params["replace"] == "true"){
      $content = str_replace('a','b',$content);
      $content = str_replace('c','d',$content);
  }
    $content = substr($content,0,$params["maxnum"]);
    return $content;
}