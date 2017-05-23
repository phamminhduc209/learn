<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		abstract class dongvat {
			public $name;
			public function set_name($ten) {
				return $this -> name = $ten;
			}
			public function get_name() {
				return $this -> name;
			}
			abstract function amthanh();
			abstract function chan();
		}
		class dog extends dongvat {
			public function amthanh() {
				echo "Gau Gau";
			}
			public function chan() {
				echo "4 chan";
			}
		}
		class chicken extends dongvat {
			public function amthanh() {
				echo "Cuc tac";
			}
			public function chan() {
				echo "2 chan";
			}
		}
		$a = new dog;
		$a -> set_name("lulu");
		echo $a -> get_name();
		$a -> amthanh();
		$a -> chan();
		echo "<br>";
		$b = new chicken;
		$b -> set_name("chipchip");
		echo $b -> get_name();
		$b -> amthanh();
		$b -> chan();
	?>
</body>
</html>