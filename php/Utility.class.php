<?php

	class Utility
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
			$this->password = "";
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
			$this->num_rows = $result->num_rows;

			if (strpos(strtolower($sql), 'select') !== false){
					$this->result = $result->fetch_assoc();
					return $this->result;
			}
			return $result->num_rows;	
		}

		// Work
		public function select($table, $condition=""){
			$sql = "SELECT * FROM " . $table . " ". $condition;
			$result = $this->con->query($sql);
			$this->num_rows = $result->num_rows;
			echo $this->num_rows;
			if ($this->num_rows > 0) {
				$array = new ArrayObject();
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $cloth = new Cloth();
                    $cloth->id = row['id'];
                    $cloth->name = row['name'];
                    $cloth->price = row['price'];
                    $cloth->discount = row['discount'];
                    $cloth->status = row['status'];
                    $cloth->thumbnail = row['thumbnail'];
                    $cloth->cat_id = row['cat_id'];
                    $cloth->description = row['description'];
                    $array->append($cloth);
                }
                return $array;
			}
			return null;
		}

		// work
		public function delete($tableName, $condition){
			$sql = "DELETE FROM " . $tableName . " " . $condition;
			if($this->con->query($sql)){
				return true;
			}
			return false;
		}

}











?>