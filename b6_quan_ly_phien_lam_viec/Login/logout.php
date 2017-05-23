<?php
	setcookie("name","$n",time()-10);
	header("Location: login.php");
	exit();
?>