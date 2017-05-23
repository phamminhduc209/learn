<?php
	session_start();
	// Get $u && $p
	$u = $_GET['user'];
	$p = $_GET['pass'];

	// Connect Database: host, username, pass connect data
	$conn = mysql_connect("localhost","root","");
	// Select Database user_login
	mysql_select_db("user_login",$conn);
	// sql select from user
	$sql = "select * from user where username = '$u' and password = '$p'";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) == 0) {
		echo "1";
	} else {
		$data = mysql_fetch_assoc($query);
		$_SESSION['ses_username'] =  $data['username'];
		// $_SESSION['ses_level'] = $data['level'];
	}
?>