<?php

	class ABC {
		public $name = "Minh Duc";
		public function test() {
			echo "I'm Minh Duc - ";
		}
	}

	class BCD extends ABC {
		public $job = "Developer";
		public function test() {
			parent::test();
			echo $this -> job;
		}
	}

	class CDE extends ABC {
		public $age = "25";

	}

	$a = new BCD;
	$a -> test();
	
?>