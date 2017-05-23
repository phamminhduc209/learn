<?php

	//var_dump('<prev', $_POST);die;
	if ($_POST['txtuser'] == NULL) {
		echo "Please enter your username <br />";
	}else{
		$u = $_POST['txtuser'];
	}

	if ($_POST['txtpass'] == NULL) {
		echo "Please enter your password";
	}else{
		$p = $_POST['txtpass'];
	}

	if ($u && $p) {
		if ($u == "admin" && $p == "12345") {
			echo "Welcome back, $u";
		}else{
			echo "Wrong username or password";
		}
	}



?>