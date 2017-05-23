<?php
	class ABC {
		public function set_name ($ten) {
			$this -> name = $ten;
		}
		public function get_name() {
			return $this -> name;
		}
	}

	$a = new ABC;
	$a -> set_name("Kenny");
	$b = clone $a;
	$b -> set_name("Jacky");
	echo $a->get_name();
?>