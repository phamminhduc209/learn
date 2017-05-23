<?php

	// Get $u && $p
	$u = $_GET['user'];
	$p = $_GET['pass'];
	if ($u == "admin" && $p == "12345") {
		echo "Welcomback, Admin! ^_^";
	} else {
		// Case Wrong
		echo "1";
	}

?>