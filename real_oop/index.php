<?php
	session_start();
	require "class.php";
	require "user.php";
	if ($_SESSION['ses_level'] != 2) {
		header("location:login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index.php</title>
</head>
<body>
	<table class="">
		<tr>
			<td colspan="5">
				<?php
					echo "Welcome back, ". $_SESSION['ses_username']."!";
				?>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<a href="add_user.php" title="Add User">Add User</a> - (<a href='logout.php' title='Logout'>Logout</a>)
			</td>
		</tr>
		<tr>
			<td>STT</td>
			<td>Username</td>
			<td>Level</td>
			<td>Edit</td>
			<td>Del</td>
			<?php
				$muser = new User;
				$data = $muser->listall();
				// $stt = 0;
				echo "<pre>";
				print_r($data);
				echo "</pre>";
				// foreach ($data as $item) {
				// 	echo "<td>$stt++</td>";
				// }
			?>
		</tr>
	</table>
</body>
</html>