<?php
	if (isset($_POST['ok'])) {
		if ($_POST['txtuser'] == NULL) {
			echo "Please Enter User Name";
		} else {
			$n = $_POST['txtuser'];
		}
		if ($_POST['txtuser']) {
			$conn = mysql_connect("localhost","root","12345");
			mysql_select_db("userlogin",$conn);
			$query = mysql_query('select * from user where name="$n"');
			$row = mysql_num_rows($query);
		}
	}
?>

<form action="bai11.php" method="post">
	User Name: <input type="text" name="txtuser" value="<?php echo $_POST['txtuser'] ?>" size="15" />
	<input type="submit" name="ok" value="Submit">
</form>