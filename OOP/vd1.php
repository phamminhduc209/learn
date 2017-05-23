<?php

	class ABC {
		public $name = "Ku Đức";
		public function test(){
			return $this -> name;
		}
	}
	$a = new ABC;
	echo $a -> test();

?>