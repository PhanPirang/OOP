<?php

	require 'Db.interface.php';
	class Utility implements Db
	{
		private $host;
		private $username;
		private $password;
		private $db;
		private $result;
		public $num_rows;
		private $con;

		public function getNumRows()
		{
			return $this->num_rows;
		}

		public function __construct()
		{
			$this->host = "localhost";
			$this->username = "root";
			$this->password = "root";
			$this->db = "master";
			$this->con = new mysqli(
				$this->host, 
				$this->username, 
				$this->password, 
				$this->db
			);
			if($this->con->connect_error){
				die("Cannot connect to database");
			}
		}


		function closeConnection(){
			$this->con->close();
		}

		// work
		public function query($sql)
		{
			$result = $this->con->query($sql);
			if (strpos(strtolower($sql), 'select') !== false){
				$rows = array();
				if ($result != null || $result != "") {
					while($row = $result->fetch_assoc()) {
			        	$rows[] = $row;
			        }
			    }
			    return $rows;
			}
			return true;
		}

		// Work
		/*public function select($table, $condition=""){
			$sql = "SELECT * FROM " . $table . " ". $condition;
			$result = $this->con->query($sql);
			$this->num_rows = $result->num_rows;
			echo $this->num_rows;
			if ($this->num_rows > 0) {
				$array = new ArrayObject();
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $cloth = new Cloth();
                    $cloth->setId($row['id']);
                    $cloth->setName($row['name']);
                    $cloth->setPrice($row['price']);
                    $cloth->setDiscount($row['discount']);
                    $cloth->setStatus($row['status']);
                    $cloth->setThumbnail($row['thumbnail']);
                    $cloth->setCat_id($row['cat_id']);
                    $cloth->setDescription($row['description']);
                    $array->append($cloth);
                }
                return $array;
			}
			return null;
		}*/

		public function select($table, $condition=""){
			$sql = "SELECT * FROM " . $table . " ". $condition;
			$result = $this->con->query($sql);
			$this->num_rows = $result->num_rows;
			$rows = array();
			if ($this->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
			        $rows[] = $row;
			    }
			}
			return $rows;
		}

		// work
		public function delete($tableName, $condition){
			$sql = "DELETE FROM " . $tableName . " " . $condition;
			if($this->con->query($sql)){
				return true;
			}
			return false;
		}




		public function isValidUser ($un, $pwd)
		{
			$pwd = md5($pwd);
			$sql = "select * from users where username = '$un' and password='$pwd'";
			$arr = $this->query($sql);
			if ($arr != null || $arr != "") {
				return true;
			}
			return false;
		}

		public function isLogin()
		{
			session_start();
			if(isset($_SESSION["un"])){
				return true;
			}
			return false;
		}

		public function isAuthenticate()
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