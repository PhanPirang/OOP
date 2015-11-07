<?php
	/**
	* 
	*/
	require 'Utility.class.php';
	class Authentication
	{
		//$db1 = new Utility();
		public static function isValidUser ($un, $pwd)
		{
			$db1=new Utility();
			$pwd = md5($pwd);
			$sql = "select * from users where name = '$un' and password='$pwd'";
			$arr = $db1->query($sql);
			echo count($arr);

			if ($arr != null || $arr != "") {
				return true;
			}
			return false;
		}

		public static function isLogin()
		{
			session_start();
			if(isset($_SESSION["un"])){
				return true;
			}
			return false;
		}

		public static function isAuthenticate()
		{
			if(!isLogin()){
				if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
					$un = $_COOKIE['username'];
					$pwd = $_COOKIE['password'];
					if(isValidUser($un, $pwd)){
						session_start();
						$_SESSION["un"] = $un;
					}
				}else{
					header('Location: login.php');
				}
			}
		}
	}
?>