<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 21:30
 */
class salaryModel{
    public $dtailtable="salary_detail";
    public $filetable="salary_file";

    function getsalaryMouth($userid){
        //获取已经有的月份
        $sql="SELECT mouth FROM ".$this->dtailtable."
                WHERE userid=\"".$userid."\"
                ORDER BY mouth DESC";
        return DB::findAll($sql);
    }

    function getOneMonuthSalaryDetail($userid,$Mouth){
        //表格数据
        $sql = "SELECT * FROM ".$this->filetable;
        $fileArr = DB::findAll($sql);
        //循环数据生成SQL语句  将detail表橫表变竖表
        $sql = "";
        foreach($fileArr as $k=>$val){
          $sql.= "SELECT \"".$val["filename"]."\" as filename,".$val["filename"].
                 " as num from ".$this->dtailtable." WHERE userid=\"".$userid."\"
                 and mouth=\"".$Mouth."\" union ";
        }
        $sql = rtrim( trim($sql),'union ' );

        $sql = "SELECT * FROM ".$this->filetable.
               " left join (".$sql.") detailtable
               on ".$this->filetable.".filename=detailtable.filename
               order by ".$this->filetable.".sortnum";
        return DB::findAll($sql);
    }
}