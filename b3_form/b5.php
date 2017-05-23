<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>B5</title>
</head>
<body>
	<!-- 
		Xây dựng 1 trang đăng ký thông tin tuyển dụng bao gồm tên, địa chỉ, giới tính, quê quán, ghi chú cá nhân, hình ảnh.
		1- Kiếm tra nếu người dùng không nhập liệu
		2- Kiểm tra nếu người dùng không upload hình
		3- Hiển thị các thông tin mà người dùng vừa nhập (bao gồm cả hình ảnh).
	-->
	<form action="xuly_b5.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="txtname"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="txtaddress"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="1" checked> Male
					<input type="radio" name="gender" value="2"> Female
				</td>
			</tr>
			<tr>
				<td>Province</td>
				<td>
					<select name="province">
						<option value="1">Dong Nai</option>
						<option value="2">Vung Tau</option>
						<option value="3">Binh Thuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Note</td>
				<td><textarea name="txtnote" cols="25" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="img" accept="file_extension|audio/*|video/*|image/*|media_type"></td>
			</tr>
		</table>
		<input type="submit" name="ok" value="Upload">
	</form>
</body>
</html>