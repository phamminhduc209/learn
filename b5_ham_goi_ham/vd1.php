<?php
	// Hàm không truyền tham số
	echo "Hàm không truyền tham số<br>";
	function hello(){
		echo "Xin chao, chuc ban mot ngay lam viec vui ve";
	}
	$a = 3;
	if ($a == 2) {
		hello();
		echo "<br>Hom nay la thu 3";
	}
	if ($a == 3) {
		hello();
		echo "<br>Hom nay la thu 3";
	}
?>