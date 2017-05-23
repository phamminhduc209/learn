<?php
	session_start();
	if (isset($_SESSION['name'])) {
		echo "welcome back, ".$_SESSION['name'];
		echo "(<a href='logout.php'>Logout</a>)";
	}else{
		echo "Please login when you visit.";
	}
?>