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
	<style type="text/css" media="screen">
		td {
			font: 12px verdena;
			text-align: center;
			border: 1px solid #0099FF;
		}
		.title {
			background: #0099FF;
			color: #fff;
			font-weight: bold;
		}
		a {
			color: #0099FF;
			text-decoration: none;
		}
		a:hover {
			color: #FF6600;
		}
		a.title {
			color: #fff;
		}
	</style>
</head>
<body>
	<table width="450px" align="center">
		<tr>
			<td colspan="5" class="title">
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
			<td class="title">STT</td>
			<td class="title">Username</td>
			<td class="title">Level</td>
			<td class="title">Edit</td>
			<td class="title">Del</td>
			<?php
				$stt = 0;
				$muser = new User;
				$data = $muser->listall();
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				foreach ($data as $item) {
					$stt++;
					echo "<tr>";
					echo "<td>$stt</td>";
					echo "<td>$item[username]</td>";
					if ($item['level'] == 2) {
						echo "<td><font color='red'>Admin</font></td>";
					}else{
						echo "<td>Member</td>";
					}
					echo "<td><a href='edit_user.php?uid=$item[id]' title='Edit User'>Edit</a></td>";
					echo "<td><a href='del_user.php?uid=$item[id]' title='Delete User'>Delete</a></td>";
					echo "</tr>";
				}
			?>
		</tr>
	</table>
</body>
</html>