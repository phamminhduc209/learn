<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhap Ten Nguoi Dung</title>
</head>
<body>
	
	<form action="vd3.php" method="POST">
		Your Name: <input type="text" name="txtname">
		<input type="submit" name="ok" value="Submit">
	</form>

	<?php

		if (isset($_POST['ok'])) {
			$name = $_POST['txtname'];
			$p = fopen("c.txt", "a");
			fwrite($p, $name."\r\n");
			fclose($p);
			echo "Danh sach nguoi dung<br>";
			$p = fopen("c.txt", "r");
			while (!feof($p)) {
				echo fgets($p)."<br>";
			}
			fclose($p);
		}
	?>

</body>
</html>