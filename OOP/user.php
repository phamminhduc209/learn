<?php

	$error = "";
	if (isset($_POST['ok'])) {
		$u = $p = "";
		if($_POST['txtuser'] == NULL) {
			$error = "Please enter your username";
		}else{
			$u = $_POST['txtuser'];
		}
		if($_POST['txtpass'] ==  NULL) {
			$error = "Please Enter Your Password";
		}else{
			$p = $_POST['txtpass'];
		}
		if($u && $p) {
			// Do Something
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Login</title>
	<!-- <link rel="stylesheet" href=""> -->
</head>
<body>

	<?php

		if($error!="") {
			echo "<ul>";
			foreach($error as $err) {
				echo "<li>$err</li>";
			}
			echo "</ul>";
		}

	?>
	
	<form action="login.php" method="post">
		Username: <input type="text" name="txtuser" size="25">
		Password: <input type="text" name="txtpass" size="25">
		<input type="submit" name="ok" value="Submit">
	</form>

</body>
</html>