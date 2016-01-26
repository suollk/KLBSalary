<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/23
 * Time: 23:15
 */


class adminindexModel{
    //获取用户当前有关数据
        function index($userid,$userno){
//          当前最后薪资一个月数据
            $salaryM = M("salary");
            $slalrydata = $salaryM->getsalaryMonth("$userno");
//          是否有新的调查问卷
//            $inquireM = M("inquiry");
//            $inquirydata = $inquireM->getinquirylist($userid);

//          确定薪资是否有记录    有的话取出来第一条数据  确认是否有新的调查问卷  返回数量
            $salaryback = count($slalrydata)=="0"?"暂时还没有你得薪资记录":"最后薪资记录:".$slalrydata[0]["year"]."年".$slalrydata[0]["month"]."月";
//            $inquiryback = count($inquirydata);
//          返回是否有新的或者未完成的调查问卷的数目加上薪资的最后一条记录  ,"inquire"=>$inquiryback
            return array("havesalary"=>count($slalrydata),"salary"=>$salaryback);
        }


}