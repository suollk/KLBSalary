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
        die("{'result':'" . $error."'");
    }
//    链接函数
//    $configArr=array($dbhost,$dbuser,$dbpsw,$dbname,$dbcharset)
    function connect($configArr)
    {
        //此函数将数组转换为参数
        extract($configArr);
        if (!($con = mysqli_connect($configArr["dbhost"], $configArr["dbuser"],
            $configArr["dbpsw"],$configArr["dbname"],$configArr["port"]))) {
            $this->err(mysqli_error($con));
        }

        mysqli_query($con,"set names " . $configArr["dbcharset"]);

        return $con;
    }

//  最终查询函数
    function query($con,$sql)
    {
        if (!($query = mysqli_query($con,$sql))) {
            $this->err($sql . "<br/>" . mysqli_error($con));
        } else {
            return $query;
        }
    }

//  将结果集转变为数组全部输出
    function findAll($query)
    {
        while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $list[] = $rs;
        }
        return isset($list) ? $list : "";
    }

//  返回一行数据
    function findOne($query)
    {
        $rs = mysqli_fetch_array($query, MYSQL_ASSOC);
        return isset($rs) ? $rs : "";
    }
//  返回结果中某一行某一列的值   --- mysqli已废除
    function findResult($query,$row = 0,$field = 0){
        $rs = mysqli_result($query,$row,$field);
        return isset($rs) ? $rs : "";
    }
//  在表中插入数据
    function insert($con,$table,$arr){
        foreach ($arr as $key=>$value){
            $value = mysqli_real_escape_string($con,$value);
            $keyArr[] = $key;
            $valueArr[] = '"'.$value.'"';
        }
        $keys = implode(",",$keyArr);
        $values = implode(",",$valueArr);
        $sql = "insert into ".$table." (".$keys.") values(".$values.")";
        $this->query($con,$sql);
        return mysqli_insert_id($con);
    }
//  在表中更新数据
    function update($con,$table,$arr, $where= ""){
        if (!is_array($arr) || count($arr) <= 0) {
            $this->err('没有要更新的数据');
        }
        $value = "";
        while (list($key, $val) = each($arr))
            $value .= "$key = '$val',";
        $value .= substr($value, 0, -1);
        $sql = "update $table set $value where 1=1 and $where";
        $this->query($con,$sql);
        return mysqli_error($con);
    }
//    删除语句操作
    function delete($table, $where){
        $sql = "delete from ".$table." where ".$where;
        $this->query($sql);
    }

}