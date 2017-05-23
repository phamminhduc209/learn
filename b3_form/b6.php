<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xu ly tren 1 trang</title>
</head>
<body>
	<form action="b6.php" method="POST" accept-charset="utf-8">
		Your Name: <input type="text" name="txtname" size="15" />
		<input type='submit' name='ok' value='Submit' />
	</form>
	<?php
		// isset($_tenbien)
		// isset la ham tra ve ket qua true or false
		// True: bien do ton tai
		// False: bien do khong ton tai
		if (isset($_POST['ok'])) {
			echo "Xin chao, ". $_POST['txtname'];
		}
	?>
</body>
</html>