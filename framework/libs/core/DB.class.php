<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-06
 * Time: 23:07
 * 数据库操作工厂方法
 */
class DB{
    public static $db;

    public static function init($dbtype,$config){
        self::$db =new $dbtype;
        self::$db->connect($config);
    }

    public static function query($sql){
        return self::$db->query($sql);
    }

    public static function findAll($sql){
        $query = self::$db->query($sql);
        return self::$db->findAll($query);
    }

    public static function findOne($sql){
        $query = self::$db->query($sql);
        return self::$db->findOne($query);
    }

    public static function findResult($sql ,$row =0 ,$field =0){
        $query = self::$db->query($sql);
        return self::$db->findResult($query,$row,$field);
    }

    public static function insert($table,$arr){
        return self::$db->insert($table,$arr);
    }

    public static function update($table,$arr,$where){
        return self::$db->update($table,$arr,$where);
    }

    public static function delete($table,$where){
        return self::$db->delete($table,$where);
    }


}