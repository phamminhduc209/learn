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

	class BCD extends ABC {
		public $def = "DEFI";
		public function test2() {
			$this -> test();
			echo $this -> def;
		}
	}

	$a = new BCD;
	echo $a -> test2();
?>