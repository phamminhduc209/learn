<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment</title>
	<script language="javascript" src="ajax.js"></script>
</head>
<style>
	body {
		width: 780px;
		margin: 0 auto;
		padding: 10px 0;
	}
	.com {
		background-color: #caeff9;
		border: 1px solid #0099FF;
		padding: 5px;
		margin-bottom: 5px;
		width: 100%; 
	}
	.com p {
		margin: 5px 0;
	}
	table {
		width: 100%;
	}
	.w10px {
		width: 10px;
	}
	.no-wrap {
		white-space: nowrap;
	}
</style>
<body>
	<!-- Mở rộng: Liệt kê các ý kiến có sẵn trong cơ sở dữ liệu.
	Khi gởi ý kiến mới, hãy lưu vào cơ sở dữ liệu, và hiển thị ý kiến vừa cập nhật. Đồng thời dữ liệu trong biểu mẫu sẽ xóa trắng phần nội dung. -->
	<div id="comment">
		<?php
			// Connect Database: host, username, pass connect data
			$conn = mysql_connect("localhost","root","");
			// Select Database user_login
			mysql_select_db("user_login",$conn);
			header("content-type:text/html; charset='UTF-8'");
			$sql = "select * from comment order by com_id asc";
			$query = mysql_query($sql);
			while ($data = mysql_fetch_assoc($query)) {
				echo "<div class='com'>";
				echo "<p><b>$data[com_name] - $data[com_email]</b></p>";
				echo "<p>$data[com_mess]</p>";
				echo "</div>";
			}
		?>
	</div>
	<div id="ketqua"></div>
	<div id="formid">
		<form action="javascript:comment();" method="post">
			<table>
				<tr>
					<td class="w10px no-wrap">Your Name:</td>
					<td><input type="text" name="txtname" id="name" style="width: 100%;"></td>
				</tr>
				<tr>
					<td class="w10px no-wrap">Your Email:</td>
					<td><input type="email" name="txtemail" id="email" style="width: 100%;"></td>
				</tr>
				<tr>
					<td class="w10px no-wrap">Mess:</td>
					<td><textarea name="txtmess" id="mess" style="width: 100%;"></textarea></td>
				</tr>
				<tr colspan="2">
					<td><button type="submit" name="ok">Comment</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>