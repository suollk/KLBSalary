<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-18
 * Time: 16:04
 */
 function smarty_modifier_test($uime,$format){
     return date($format,$uime);
 }