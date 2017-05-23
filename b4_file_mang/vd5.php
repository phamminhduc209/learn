<?php
	// Duyet Mang
	// Duyet Mang Tuan Tu
	$a = array("PHP","ASP","JSP");
	foreach ($a as $key) {
		echo $key."<br>";
	}

	foreach ($a as $key => $d) {
		echo "$key : $d<br>";
	}

	// Duyet Mang Bat Tuan Tu
	$person = array('name' => 'Minh Duc','age' => '24');
	foreach ($person as $item) {
		echo $item."<br>";
	}

	foreach ($person as $item => $str) {
		echo "$item : $str <br>";
	}
?>