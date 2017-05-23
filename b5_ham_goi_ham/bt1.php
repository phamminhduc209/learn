<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài Tập 1</title>
</head>
<body>
	<!--
	Bài tập 1:
	Cho hai text box A, B cho phép người dùng nhập từ form. Hãy sử dụng hàm tự định nghĩa để xử lý các yêu cầu sau:
	1- Tính các phép toán tổng, hiệu, thương, tích của hai số A, B.
	2- Tính trung bình cộng của 4 phép toán trên.
	3- Kiểm tra xem A có phải là số nguyên tố hay không.
	4- Tính giai thừa của số B.
	-->
	<form action="bt1.php" method="post">
		Số A: <input type="text" name="txta" size="10" value="<?php echo $_POST['txta'] ?>"/>
		Số B: <input type="text" name="txtb" size="10" value="<?php echo $_POST['txtb'] ?>"/>
		<input type="submit" name="ok" value="Submit">
	</form>

	<?php
		if (isset($_POST['ok'])) {
			if ($_POST['txta'] == NULL) {
				echo "Please Enter Your Number A<br />";
			}else{
				$soa = $_POST['txta'];
			}

			if ($_POST['txtb'] == NULL) {
				echo "Please Enter Your Number B";
			}else{
				$sob = $_POST['txtb'];
			}

			// 1- Tính các phép toán tổng, hiệu, thương, tích của hai số A, B.
			function tong($soa,$sob){
				global $soa;
				global $sob;
				$cong = ($soa + $sob);
				return $cong;
			}
			echo "Tong cua 2 so tren la: ".tong($soa,$sob)."<br />";

			function hieu($soa,$sob){
				global $soa;
				global $sob;
				$tru = ($soa - $sob);
				return $tru;
			}
			echo "Hieu cua 2 so tren la: ".hieu($soa,$sob)."<br />";

			function nhan($soa,$sob){
				global $soa;
				global $sob;
				$nhan = ($soa * $sob);
				return $nhan;
			}
			echo "Tich cua 2 so tren la: ".nhan($soa,$sob)."<br />";

			function chia($soa,$sob){
				global $soa;
				global $sob;
				$chia = ($soa / $sob);
				return $chia;
			}
			echo "Thuong cua 2 so tren la: ".chia($soa,$sob)."<br />";

			// 2- Tính trung bình cộng của 4 phép toán trên.
			function tbcong($soa,$sob){
				global $soa;
				global $sob;
				$tr_cong = (($soa + $sob) + ($soa - $sob) + ($soa * $sob) + ($soa / $sob))/4;
				return $tr_cong;
			}
			echo "Trung Binh Cong cua 2 so tren la: ".tbcong($soa,$sob)."<br />";

			function snt($a){
				$snt=TRUE;
				for($i=2;$i<=$a/2;$i++){
					if($a % $i == 0){
						$snt=FALSE;
						break;
					}
				}
				return $snt;
			}
			if(snt($soa) == TRUE){
				echo "So $soa la so nguyen to <br />";
			}else{
				echo "So $soa khong la so nguyen to<br />";
			}

			// Giai thua
			function giaithua($sob){
				$total=1;
				for($i=1;$i<=$sob;$i++){
					$total=$total * $i;
				}
				return $total;
			}
			echo "Giai thua cua so $sob là: ". giaithua($sob) ."<br />";
		}
	?>
</body>
</html>