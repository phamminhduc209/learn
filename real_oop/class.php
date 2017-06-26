<?php
	class database {
		private $hostname = "localhost";
		private $userhost = "root";
		private $passhost = "";
		private $dbname = "project_oop";
		private $conn = NULL;
		private $result = NULL;

		// Ham ket noi csdl
		public function connect() {
			//var_dump($this->hostname,$this->userhost,$this->passhost)
			$this->conn=mysql_connect($this->hostname,$this->userhost,$this->passhost);
			mysql_select_db($this->dbname,$this->conn);
		}

		// Ham ngat ket noi csdl
		public function discconnect() {
			if($this->conn) {
				mysql_close($this->conn);
			}
		}

		// Ham 
		public function query($sql) {
			$this->result=mysql_query($sql);
		}

		// Ham dem so dong trong csdl
		public function num_rows() {
			if($this->result){
				$row = mysql_num_rows($this->result);
			}else{
				$row = 0;
			}
			return $row;
		}

		// Ham lay ket qua tron csdl
		public function fetch() {
			if ($this->result) {
				$data=mysql_fetch_assoc($this->result);
			}else{
				$data=0;
			}
			return $data;
		}

		public function listall() {
			$sql = "select * from user order by it desc";
			$this -> query($sql);
			if ($this -> num_rows() == 0) {
				$data = 0;
			}else{
				while ($row = $this -> fetch()) {
					$data[] = $row;
				}
				return $data;
			}
		}
	}

	// $db = new database;
	// $db->connect();
	// $sql="select * from user order by id desc";
	// $db->query($sql);
	// $row=$db->num_rows();
	// echo $row;
	// while ($data=$db->fectch()) {
	// 	echo "<pre>";
	// 	print_r($data);
	// 	echo "</pre>";
	// 	echo $data['username'];
	// }
?>