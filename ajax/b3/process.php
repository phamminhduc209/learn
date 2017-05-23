<?php
	// Xây dựng trang ý kiến phản hồi cho phép người dụng gửi thông tin của họ trên website bao gồm (tên, email, và nội dung phản hồi).
	// Nếu người dùng không nhập thông tin thì báo lỗi. Nếu người dùng có nhập đầy đủ thông tin, hãy xuất các thông tin ấy và ẩn biểu mẫu nhập liệu
	$u = $_POST['name'];
	$e = $_POST['email'];
	$m = $_POST['mess'];
	if ($u != "" && $e != "" && $m != "") {
		echo "<h4 style='margin: 0;'>Your Comment</h4>";
		echo "Name: $u<br>";
		echo "Email: $e<br>";
		echo "Mess: $m";
	} else {
		echo "1";
	}

?>