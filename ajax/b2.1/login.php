<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Connect Ajax -->
	<script language="javascript" src="ajax.js"></script>
</head>
<body>
	<div id="ketqua"></div>
	<div id="formid">

		<?php
			if (isset($_SESSION['ses_username'])) {
				echo "Welcome back, ".$_SESSION['ses_username'];
			} else {
		?>

		<form action="javascript:login();" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="txtuser" id="txtuser" size="20"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="txtpass" id="txtpass" size="20"></td>
				</tr>
				<tr colspan="2">
					<td><button type="submit" name="ok">Login</button></td>
				</tr>
			</table>
		</form>

		<?php

			}

		?>

	</div>
</body>
</html>