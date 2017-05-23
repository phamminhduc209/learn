<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment</title>
	<script language="javascript" src="ajax.js"></script>
</head>
<body>
	<!-- Xây dựng trang ý kiến phản hồi cho phép người dụng gửi thông tin của họ trên website bao gồm (tên, email, và nội dung phản hồi).
	Nếu người dùng không nhập thông tin thì báo lỗi. Nếu người dùng có nhập đầy đủ thông tin, hãy xuất các thông tin ấy và ẩn biểu mẫu nhập liệu -->
	<div id="ketqua"></div>
	<div id="formid">
		<form action="javascript:comment();" method="post">
			<table>
				<tr>
					<td>Your Name:</td>
					<td><input type="text" name="txtname" id="name" style="width: 100%;"></td>
				</tr>
				<tr>
					<td>Your Email:</td>
					<td><input type="email" name="txtemail" id="email" style="width: 100%;"></td>
				</tr>
				<tr>
					<td>Mess:</td>
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