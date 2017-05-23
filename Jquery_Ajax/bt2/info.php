<?php
	$n = $_POST['name'];
	$m = $_POST['email'];
	$c = $_POST['info'];
	if ($n != "" && $m != "" && $c != "") {
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("user_login",$conn);
		$sql = "insert into comment(com_name,com_email,com_mess,com_date) values('$n','$m','$c',now())";
		mysql_query($sql);
		// $sql = "select * from comment";
		// $query = mysql_query($sql);
		// while ($data = mysql_fetch_assoc($query)) {
		// 	echo "<div class='com'>";
		// 	echo "<p><b>$data[com_name] - $data[com_email]</b></p>";
		// 	echo "<p>$data[com_mess]</p>";
		// 	echo "<i style='font-size: 12px;'>$data[com_date]</i>";
		// 	echo "</div>";
		// }
		echo "<div class='com'>";
		echo "<p><b>$n - $m</b></p>";
		echo "<p>$c</p>";
		echo "<i>now()</i>";
		echo "</div>";
	} else {
		echo "1";
	}
?>