<?php

/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-06
 * Time: 21:47
 */
class mysql
{
//    报错函数
    function err($error)
    {
        die("发生错误:" . $error);
    }
//    链接函数
//    $configArr=array($dbhost,$dbuser,$dbpsw,$dbname,$dbcharset)
    function connect($configArr)
    {
        //此函数将数组转换为参数
        extract($configArr);
        if (!($con = mysql_connect($configArr["dbhost"], $configArr["dbuser"],
            $configArr["dbpsw"]))) {
            $this->err(mysql_error());
        }

        if (!mysql_select_db($configArr["dbname"], $con)) {
            $this->err(mysql_error());
        }

        mysql_query("set names " . $configArr["dbcharset"]);
    }

//  最终查询函数
    function query($sql)
    {
        if (!($query = mysql_query($sql))) {
            $this->err($sql . "<br/>" . mysql_error());
        } else {
            return $query;
        }
    }

//  将结果集转变为数组全部输出
    function findAll($query)
    {
        while ($rs = mysql_fetch_array($query, MYSQL_ASSOC)) {
            $list[] = $rs;
        }
        return isset($list) ? $list : "";
    }

//  返回一行数据
    function findOne($query)
    {
        $rs = mysql_fetch_array($query, MYSQL_ASSOC);
        return isset($rs) ? $rs : "";
    }
//  返回结果中某一行某一列的值
    function findResult($query,$row = 0,$field = 0){
        $rs = mysql_result($query,$row,$field);
        return isset($rs) ? $rs : "";
    }
//  在表中插入数据
    function insert($table,$arr){
        foreach ($arr as $key=>$value){
            $value = mysql_real_escape_string($value);
            $keyArr = "'".$key."'";
            $valueArr = "'".$value."'";
        }
        $keys = implode($keyArr);
        $values = implode($valueArr);
        $sql = "insert into ".$table." (".$keys.") values".$values;
        $this->query($sql);
        return mysql_insert_id();
    }
//  在表中更新数据
    function update($table,$arr, $where){
        foreach ($arr as $key=>$value){
            $value = mysql_real_escape_string($value);
            $keyArr = "'".$key."'='".$value."'";

        }
        $keys = implode($keyArr);
        $sql = "update ".$table."set ".$keys." where ".$where;
        $this->query($sql);
    }
//    删除语句操作
    function delete($table, $where){
        $sql = "delete from ".$table." where ".$where;
        $this->query($sql);
    }

}