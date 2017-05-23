<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo PHP Form</title>
</head>
<body>

	<!--  
	Tạo 1 trang web với nội dung nhập thông tin sinh viên bao gồm : Họ và tên, điện thoại, CMND, địa chỉ, email, giới tính, ghi chú cá nhân. Viết trang web thỏa các yêu cầu sau:
	1- Nếu người sử dụng không nhập thông tin thì phải báo lỗi “Vui lòng nhập đầy đủ thông tin, nhấn Back để thực hiện lại sự việc trên”.
	2- Nếu sinh viên có tên là Nguyen Hoang Lam hoặc CMND có số là “8723451”. Thì xuất ra thông báo “Sinh viên này chưa đóng học phí cho học kỳ II”.
	3- Xuất toàn bộ dữ liệu vừa nhập sang trang view.php.
	-->
	<form action='xuly_b2.php' method='POST' accept-charset='utf-8'>
		<table>
			<tr>
				<td>Full Name:</td>
				<td><input type='text' name='txtname'></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type='text' name='txtaddress'></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type='text' name='txtphone'></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type='email' name='txtmail'></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender"  value="1" checked> Male
					<input type="radio" name="gender"  value="2"> Female
				</td>
			</tr>
			<tr>
				<td>Country:</td>
				<td>
					<select name="country">
						<option value="1">Viet Nam</option>
						<option value="2">Thai Lan</option>
						<option value="3">Combodia</option>
						<option value="4">Japan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Note:</td>
				<td><textarea name="txtnote" rows="5" cols="25"></textarea></td>
			</tr>
		</table>
		<input type='submit' name='ok' value='Register' />
	</form>

</body>
</html>