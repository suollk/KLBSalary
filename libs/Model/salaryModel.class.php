<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 21:30
 */
class salaryModel{
    public $_dtailtable="salary_detail";
    public $_filetable="salary_filed";

    function getsalaryMonth($usercode){
        //获取已经有的月份
        $sql="SELECT year,month FROM ".$this->_dtailtable."
                WHERE userno=\"".$usercode."\"
                ORDER BY month DESC";
        return DB::findAll($sql);
    }

    function getOneMonthSalaryDetail($usercode,$Year,$Month){
        //表格数据
        $sql = "SELECT filed_index
                from ".$this->_filetable."
                where activestatus = '0'
                ORDER BY sortnum";
        $fileArr = DB::findAll($sql);
        //循环数据生成SQL语句  将detail表橫表变竖表
        $sql = "";
        foreach($fileArr as $k=>$val){
          $sql.= "SELECT \"".$val["filed_index"]."\" as filename,".$val["filed_index"].
                 " as num from ".$this->_dtailtable." WHERE userno=\"".$usercode."\"
                 and year=\"".$Year."\" and month=\"".$Month."\" union ";
        }
        $sql = rtrim( trim($sql),'union ' );

        $sql = "SELECT filed_index,chinese_name,english_name,sortnum,
                CASE WHEN isstrong = 0 THEN '' WHEN isstrong = 1 THEN 'uk-text-bold' END AS isstrong,
                CASE WHEN islarger = 0 THEN '' WHEN islarger = 1 THEN 'uk-text-large' END AS islarger,
                color,detailtable.num FROM ".$this->_filetable.
               " left join (".$sql.") detailtable
               on ".$this->_filetable.".filed_index=detailtable.filename
               where salary_filed.activestatus='0'
               order by ".$this->_filetable.".sortnum";
        return DB::findAll($sql);
    }
}