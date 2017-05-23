<?php
	// Biến trong quá trình xử lý hàm
	echo "Biến trong quá trình xử lý hàm - sử dụng global để có thề dùng biến bên trong và ngoài hàm<br>";
	echo "<p>Biến bên ngoài hàm</p>";
	$a = 500;
	function test(){
		global $a;
		echo $a;
	}
	echo test();
?>

<?php
	// Biến trong quá trình xử lý hàm
	echo "<br />";
	echo "<p>Biến bên trong hàm</p>";
	function test2(){
		global $b;
		$b = 1000;
	}
	test2();
	echo $b;
?>