<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/24
 * Time: 21:32
 */

class adminindexModel{
    function index($userid){
//      获取用户数据
        $inquireM = M("inquiry");
        $inquirydata = $inquireM->getinquirylist($userid);

        $inquirylistdata = $inquireM->gethistoryinquirylist($userid);
//      返回新增问卷以及历史问卷
        return '{"inquiry":"'.$inquirydata.'","inquiryhistory":"'.$inquirylistdata.'"}';
    }


}