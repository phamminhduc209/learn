<?php
	require "class.php";
	require "user.php";
	$error = "";
	if (isset($_POST['ok'])) {
		$u = $p = "";
		if($_POST['txtuser'] == NULL) {
			$error[] = "Please enter your Username";
		}else{
			$u = $_POST['txtuser'];
		}
		if($_POST['txtpass'] ==  NULL) {
			$error[] = "Please Enter Your Password";
		}else{
			$p = $_POST['txtpass'];
		}
		if($u && $p) {
			$muser = new User;
			$muser->set_username($u);
			$muser->set_password($p);
			if ($muser->check_login() == FALSE) {
				$error[]="Wrong username or password";
			}else{
				echo "Login OK.";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Login</title>
	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.min.css">
	<style type="text/css" media="screen">
		body {
			margin: 0;
			padding: 0;
		}
		form {
			margin-top: 15px;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<?php
			if($error!="") {
				echo "<ul>";
				foreach($error as $err) {
					echo "<li>$err</li>";
				}
				echo "</ul>";
			}
		?>
		<form action="login.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input type="text" name="txtuser" size="25">
				</div>					
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" name="txtpass" size="25">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" name="ok" value="Submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>

	<!-- Js -->
	<script type="text/javascript" src="../lib/jquery.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap.min.js"></script>

</body>
</html>