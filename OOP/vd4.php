<?php
	
	class ABC {
		public $abc = "ABCD <br>";
		protected $bcd = "BCDF <br>";
		private $cde = "CDEF <br>";
		public function test() {
			echo $this -> abc;
			echo $this -> bcd;
			echo $this -> cde;
		}
	}
	$a = new ABC;
	echo $a -> test();
?>