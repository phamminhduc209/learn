<?php
	session_start();
	$error = "";
	require "class.php";
	require "user.php";
	if ($_SESSION['ses_level'] != 2) {
		header("location:login.php");
		exit();
	}

	if (isset($_POST['ok'])) {
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
		if () {
			# code...
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
		<form action="add_user.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Select</label>
				<div class="col-sm-10">
					<select name="level" class="form-control">
						<option value="1">Member</option>
						<option value="1">Admin</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input type="text" name="txtuser" class="form-control">
				</div>			
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" name="txtpass" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Re-Password</label>
				<div class="col-sm-10">
					<input type="password" name="txtrepass" class="form-control">
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