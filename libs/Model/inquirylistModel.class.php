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
        $inquirydata = $inquireM->getinquirylist($userid);

        $inquirylistdata = $inquireM->gethistoryinquirylist($userid);
//      返回新增问卷以及历史问卷

//        $inquirydata = count($inquirydata)=="0"?"nodata":$inquirydata;
//        $inquirylistdata = count($inquirydata)=="0"?"nodata":$inquirylistdata;

        return array("inquiry"=>$inquirydata,"inquiryhistory"=>$inquirylistdata);
    }


}