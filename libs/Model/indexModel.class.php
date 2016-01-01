<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 10:58
 * index主页数据库层操作
 */

	class indexModel{

        public $_table = 'weixin_user';

        function findOne_by_username($username){
            $sql = 'select * from '.$this->_table.' where username="'.$username.'"';
            return DB::findOne($sql);
        }

        function count(){
            $sql = 'select count(*) from '.$this->_table;
            return DB::findResult($sql, 0, 0);
        }
    }
