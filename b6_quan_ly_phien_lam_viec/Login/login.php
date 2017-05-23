	<!--
	Bài tập áp dụng:
	Xậy dựng 1 trang web kiểm tra phiên làm việc của người dùng như sau:
	+ Tạo trang đăng nhập tên login.php. Cho phép người dùng nhập vào tên truy cập và mật khẩu.
	+ Tại trang này, nếu người dùng không nhập liệu thì phải báo lỗi.
	+ Nếu người dùng nhập tên truy cập là admin và mật khẩu là 12345 thì tạo phiên làm việc cookie và chuyển người dùng sang trang admin.php. Còn ngược lại thì báo lỗi "Wrong username or password".
	+ Tạo trang admin.php dùng để xuất thông báo "welcome back, admin". Và tạo liên kết đến trang logout.php để người dùng thoát khỏi hệ thống. Chỉ những ai đăng nhập mới xem được thông tin này.
	+ Tạo trang đăng xuất cho phép hủy phiên làm việc.
	-->

	<?php
		if (isset($_POST['ok'])) {
			if ($_POST['txtname'] == NULL) {
				echo "Please Enter Username<br />";
			}else{
				$n = $_POST['txtname'];
			}

			if ($_POST['txtpass'] == NULL) {
				echo "Please Enter Password";
			}else{
				$p = $_POST['txtpass'];
			}

			if ($_POST['txtname'] && $_POST['txtpass']) {
				if ($n == "admin" && $p == "12345") {
					setcookie("name","$n",time()+10);
					header("Location: admin.php");
					exit();
				}else{
					echo "Wrong username or password";
				}
			}
		}
	?>

	<form action="login.php" method="post">
		Username: <input type="text" name="txtname" size="15" />
		Password: <input type="password" name="txtpass" size="15" />
		<input type="submit" name="ok" value="Login">
	</form>