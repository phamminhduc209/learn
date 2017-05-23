<?php
	if (isset($_COOKIE['name'])) {
		echo "welcome back, ".$_COOKIE['name'];
		echo "(<a href='logout.php'>Logout</a>)";
	}else{
		//echo "Please login when you visit.";
		header("Location: wait.php");
		exit();
	}
?>