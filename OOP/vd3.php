<?php

	class ABC {
		public function __construct(){
			echo "Hello <br>";
		}
		public function __destruct(){
			echo "Goodbye <br>";
		}
		public function test(){
			echo "Test <br>";
		}
	}
	echo "begin ";
	$a = new ABC;
	$a -> test();

?>