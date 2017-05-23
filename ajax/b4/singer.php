<!DOCTYPE html>
<html lang="vn">
<head>
	<meta charset="UTF-8">
	<title>Singer</title>
	<script language="javascript" src="ajax.js"></script>
</head>
<body>
	List Singer: <select name="singer" onchange="showsinger(this.value)">
		<option value="0">Chọn ca sĩ</option>
		<?php
			$conn = mysql_connect("localhost","root","");
			mysql_select_db("user_login",$conn);
			// SQL choose table
			$sql = "select * from singer";
			$query = mysql_query($sql);
			$stt = 0;
			while ($data = mysql_fetch_assoc($query)) {
				$stt++;
				echo "<option value='$data[singer_id]'>$stt. $data[singer_name]</option>";
			}
		?>
	</select>
	<div id="ketqua"></div>
</body>
</html>