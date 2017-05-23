<?php
	$u = $_POST['user'];
	$p = $_POST['pass'];
	if ($u == "admin" && $p == "12345") {
		echo "Welcome back, Admin!!! ^_^";
	} else {
		echo "1";
	}
?>