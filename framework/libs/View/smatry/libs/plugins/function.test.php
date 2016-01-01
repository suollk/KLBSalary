<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-11-18
 * Time: 15:58
 */
function smarty_function_test($params){
    $param1 = $params['width'];
    $param2 = $params['height'];
    return $param1*$param2;
}