<?php
	class authModel{
		function checkauth($username, $password){
			//加载
			$adminobj = M('admin');
			$auth = $adminobj -> findOne_by_username($username);
			if((!empty($auth))&&$auth['password']==$password){
				return $auth;
			}else{
				return false;
			}
		}
	}
