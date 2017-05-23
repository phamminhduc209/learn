<?php

	if ($_POST['txtname'] == NULL) {
		echo "Please enter your full name <br />";
	} else{
		$f = $_POST['txtname']."<br>";
	}

	if ($_POST['txtaddress'] == NULL) {
		echo "Please enter your address <br />";
	}else{
		$a = $_POST['txtaddress']."<br>";
	}

	if ($_POST['txtphone'] == NULL) {
		echo "Please enter your password <br />";
	}else{
		$p = $_POST['txtphone']."<br>";
	}

	if ($_POST['txtmail'] == NULL) {
		echo "Please enter your mail <br />";
	}else{
		$e = $_POST['txtmail']."<br>";
	}

	if ($f && $a && $p && $e) {
		if ($_POST['txtname'] == "Nguyen Hoang Lam") {
			echo "HSCDTHKII";
		}else{
			if ($_POST['gender'] == 1) {
				$gt = "Male";
			}else{
				$gt = "Female";
			}
			switch ($_POST['country']) {
				case '1':
					$qg = "Viet Nam";
					break;
				case '2':
					$qg = "Thai Lan";
					break;
				case '3':
					$qg = "Cambodia";
					break;
				
				default:
					$qg = "Japan";
					break;
			}
			$n = $_POST['txtnote'];
			echo "<h4>Full Name: $f</h4>";
			echo "<h4>Address: $a</h4>";
			echo "<h4>Phone: $p</h4>";
			echo "<h4>Email: $e</h4>";
			echo "<h4>Gender: $gt</h4>";
			echo "<h4>Country: $qg</h4>";
			echo "<h4>Note: $n</h4>";
		}
	}


?>