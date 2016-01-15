<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-01
 * Time: 12:54
 * weixin_user表数据库操作
 */

	class weixinuserModel{

		public $_table = 'weixin_user';

		function findOne_by_username($username){
			$sql = 'select * from '.$this->_table.' where userid="'.$username.'"';
			return DB::findOne($sql);
		}

		function insertpsw_by_username($username,$psw){
			$updatefile = array("password"=>$psw);
			return DB::update($this->_table,$updatefile,'userid="'.$username.'"');
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}
	}
