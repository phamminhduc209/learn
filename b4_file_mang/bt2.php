<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xây dựng 1 trang web cho phép người dùng lựa chọn ngày, tháng, năm từ list box</title>
	<style>
		body {
			font-style: italic;
		}
		h3 {
			margin: 0;
		}
	</style>
</head>
<body>
	
	<!-- 
		Xây dựng 1 trang web cho phép người dùng lựa chọn ngày, tháng, năm từ list box. Sau đó, họ sẽ nhấn nút check. Hãy:
		1- Thông báo ngày tháng năm sinh của họ.
		2- Hãy tính ra năm nay họ bao nhiêu tuổi.

		/=====
		3- Dựa vào ngày tháng năm sinh của họ, hãy cho biết họ thuộc cung hoàng đạo nào trong 12 cung. Sử dụng file text để liệt kê tính cách của từng cung tương ứng
		Thông tin 12 cung hoàng đạo:
			Dương Cưu : 21/03 – 20/4
			Kim Ngưu: 21/04 – 21/5
			Song Tử: 22/05 – 21/06
			Cự Giải: 22/06 - 23/07
			Hải Sư: 24/07 -23/08
			Xử Nữ: 24/08 – 23/09
			Thiên Xứng: 24/09 – 23/10
			Hổ Cáp: 24/10 -22/11
			Nhân Mã: 23/11 – 21/12
			Ma Kết: 22/12 – 20/01
			Bảo Bình: 21/01 – 19/02
			Song Ngư: 20/02 – 20/03
		=====/
	-->

	<form action="bt2.php" method="post">
		<h3>Enter your birth date</h3>
		Date <select name="day">
			<?php
				for ($d=1; $d <= 31 ; $d++) { 
					echo "<option value='$d'>$d</option>";
				}
			?>
		</select>
		Month <select name="month">
			<?php
				$thang = array("1" => "Jan","Feb", "March", "Ap", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" );
				foreach ($thang as $k => $v) {
					echo "<option value='$k'>$v</option>";
				}
			?>
		</select>
		Year <select name="year">
			<?php
				for ($y=1960; $y <= date("Y") ; $y++) { 
					echo "<option value='$y'>$y</option>";
				}
			?>
		</select>
		<input type="submit" name="ok" value="Submit">
	</form>

	<!--
		// ham lay nam hien tai
		<?php echo date("Y"); ?>
	-->

	<?php
		if (isset($_POST['ok'])) {
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			// Hien thi ngay thang nam sinh
			echo "<h3>Your Birth Day: $day - $month - $year</h3>";

			// Tinh xem nguoi dung nam nay bao nhieu tuoi
			$year_now = date("Y") - $year;
			echo "<h3>Your age: $year_now</h3>";

			$chd_name = array("Duong Cuu","Kim Nguu","Song Tu", "Cu Giai", "Hai Su","Xu Nu","Thien Xung","Ho Cap","Nhan Ma","Ma Ket","Bao Binh","Song Ngu");
			$chd_img = array("duongcuu.gif","kimnguu.gif","songtu.gif","cugiai.gif","haisu.gif","xunu.gif","thienxung.gif","nhanma.gif","maket.gif","baobinh.gif","songngu.gif");
			$chd_text = array("duongcuu.txt","kimnguu.txt","songtu.txt","cugiai.txt","haisu.txt","xunu.txt","thienxung.txt","nhanma.txt","maket.txt","baobinh.txt","songngu.txt");

			// cung hoàng đạo
			if ($day >= 21 && $month == 3 || $day <= 20 && $month == 4) {
				$i = 0;
			}

			if ($day >= 21 && $month == 4 || $day <= 21 && $month == 5) {
				$i = 1;
			}

			if ($day >= 22 && $month == 5 || $day <= 21 && $month == 6) {
				$i = 2;
			}

			if ($day >= 22 && $month == 6 || $day <= 23 && $month == 7) {
				$i = 3;
			}

			if ($day >= 24 && $month == 7 || $day <= 23 && $month == 8) {
				$i = 4;
			}

			if ($day >= 24 && $month == 8 || $day <= 23 && $month == 9) {
				$i = 5;
			}

			if ($day >= 23 && $month == 9 || $day <= 23 && $month == 10) {
				$i = 6;
			}

			if ($day >= 24 && $month == 10 || $day <= 22 && $month == 11) {
				$i = 7;
			}

			if ($day >= 23 && $month == 11 || $day <= 21 && $month == 12) {
				$i = 8;
			}

			if ($day >= 22 && $month == 12 || $day <= 20 && $month == 1) {
				$i = 9;
			}

			if ($day >= 21 && $month == 1 || $day <= 19 && $month == 2) {
				$i = 10;
			}

			if ($day >= 20 && $month == 2 || $day <= 20 && $month == 3) {
				$i = 11;
			}

			$name = $chd_name[$i];
			$img = $chd_img[$i];
			$text = $chd_text[$i];

			echo "Bạn thuộc cung hoàng đạo $name<br />";
			echo "<img src='images/$img' /><br>";
			$p = fopen("text/$text", "r");
			while (!feof($p)) {
				echo fgets($p)."<br>";
			}
			fclose($p);
		}
	?>

</body>
</html>