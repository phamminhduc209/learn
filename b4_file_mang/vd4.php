<?php
	// Mang Tuan Tu
	$arrayName = array("PHP","ASP","JSP");
	echo $arrayName[2]."<br>";
	$arrayName[] = "JAVA";
	echo $arrayName[3]."<br>";

	// Mang Bat Tuan Tu
	$person = array('name' => 'Minh Duc','age' => '24');
	echo $person['name']."<br>";
	$person['email'] = "minhducpham.it@gmail.com";
	echo $person['email'];
?>