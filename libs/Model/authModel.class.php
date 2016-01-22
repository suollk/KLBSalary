<?php
	class authModel{
		//验证用户的用户名和密码
		function checkauth($username, $password){
			//加载
			$adminobj = M('weixinuser');
			$auth = $adminobj -> findOne_by_username($username);
			if((!empty($auth))&&$auth['querypassword']==$password){
				return "";
			}else{
				return "查询密码错误!";
			}
		}

		//ajax登录入口
		function checkajaxauth($username, $password){
			//加载

			//判断用户是登录还是插入密码
			if($this->checkauth($username, '')=="")
			{
				$adminobj = M('weixinuser');
				//插入密码
				return $adminobj -> insertpsw_by_username($username,$password);
			}else{
				//登录
				return $this->checkauth($username, $password);
			}
		}
	}
