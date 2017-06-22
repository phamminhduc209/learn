<?php
	class user extends database {
		public $_username;
		public $_password;
		public function __construct() {
			$this->connect();
		}
		public function set_username($user) {
			$this->_username=$user;
		}
		public function get_username() {
			return $this->_username;
		}
		public function set_password($pass) {
			$this->_password=$pass;
		}
		public function get_password() {
			return $this->_password;
		}
		public function check_login() {
			$sql = "select * form user where username='".$this->get_username()."' and password='".$this->get_password()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return FALSE;
			}else{
				return TRUE;
			}
		}

	}
?>