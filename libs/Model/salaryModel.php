<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 21:30
 */
class salaryModel{
    function getsalaryMouth($userid){
        //获取已经有的月份
        $sql="";
        return DB::findOne($sql);
    }

    function getOneMonuthSalaryDetail($userid,$Mouth){
        //某月份的详细数据
        $sql="";
        return DB::findOne($sql);
    }
}