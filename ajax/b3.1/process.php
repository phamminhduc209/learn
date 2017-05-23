<?php
// Mở rộng: Liệt kê các ý kiến có sẵn trong cơ sở dữ liệu.
// Khi gởi ý kiến mới, hãy lưu vào cơ sở dữ liệu, và hiển thị ý kiến vừa cập nhật. Đồng thời dữ liệu trong biểu mẫu sẽ xóa trắng phần nội dung.
$conn = mysql_connect("localhost","root","");
mysql_select_db("user_login",$conn);
header("content-type:text/html; charset='UTF-8'");
if (isset($_GET['data'])) {
	$sql = "select * from comment order by com_id asc";
	$query = mysql_query($sql);
	while ($data = mysql_fetch_assoc($query)) {
		echo "<div class='com'>";
		echo "<p><b>$data[com_name] - $data[com_email]</b></p>";
		echo "<p>$data[com_mess]</p>";
		echo "</div>";
	}
} else {
	$n = $_POST['name'];
	$e = $_POST['email'];
	$m = $_POST['mess'];
	if ($n != "" && $e != "" && $m != "") {
		
		$sql = "insert into comment(com_name,com_email,com_mess,com_date) values('$n','$e','$m',now())";
		// var_dump($sql);
		mysql_query($sql);
		echo "<h4 style='margin: 0;'>Your Comment Has Been Send!!!</h4>";
	} else {
		echo "1";
	}
}



?>