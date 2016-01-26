<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/24
 * Time: 21:32
 */

class inquirylistModel{
    function index($userid){
//      获取用户数据
        $inquireM = M("inquiry");
        return $inquireM->getinquirylist($userid);
    }


}