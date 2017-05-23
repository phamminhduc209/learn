<?php
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("user_login",$conn);
	$sql = "select * from comment order by com_id asc";
	$query = mysql_query($sql);
	while ($data = mysql_fetch_assoc($query)) {
		echo "<div class='com'>";
		echo "<p><b>$data[com_name] - $data[com_email]</b></p>";
		echo "<p>$data[com_mess]</p>";
		echo "<i>$data[com_date]</i>";
		echo "</div>";
	}
?>