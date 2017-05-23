<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài Tập 2</title>
</head>
<body>

	<!--
	Bài tập 2:
	Xây dựng 1 website bán hàng. Cho phép người dùng nhập vào đơn giá và chọn lựa số lượng món hàng. Hãy tính ra tổng tiền mà người đó phải trả (bao gồm thuế VAT 10% cho món hàng họ mua).
	Nếu số lượng người dùng mua 1 món hàng nhiều hơn hoặc bằng 30 thì sẽ chiết khấu cho họ 8% trị giá của tổng tiền trước thuế.
	Ví dụ: Mua cây viết giá 10.000 VND, số lượng là 10 vậy tổng tiền phải trả là:110.000 VNĐ (đã bao gồm thuế VAT 10%).
	-->
	<form action="bt2.php" method="post">
		Name <input type="text" name="txtname" size="25" value='<?php echo $_POST['txtname']?>' />
		Price <input type="text" name="txtprice" size="10" value='<?php echo $_POST['txtname']?>' />
		Number 
		<select name="number">
			<?php
				for($i=1;$i<=100;$i++){
					if($_POST['number'] == $i){
						echo "<option value='$i' selected>$i</option>";
					}else{
						echo "<option value='$i'>$i</option>";
					}
				}
			?>
		</select>
		<input type="submit" name="ok" value="Submit">
	</form>

	<?php
		if (isset($_POST['ok'])) {
			if ($_POST['txtname'] ==  NULL) {
				echo "Please Enter Your Name";
			}else{
				$n = $_POST['txtname'];
			}
			if ($_POST['txtprice'] ==  NULL) {
				echo "Please Enter Your Price";
			}else{
				$p = $_POST['txtprice'];
			}
			$n = $_POST['number'];

			function tongtien($p,$n){
				global $p;
				global $n;
				global $i;
				if ($i >= 30) {
					$tinh_tong_tien = $p * $n + ($p * $n)*0.08;
				}else{
					$tinh_tong_tien = $p * $n + ($p * $n)*0.1;
				}
				return $tinh_tong_tien;
			}
			if ($i >= 30) {
				echo "<h3>Tong tien ban phai tra cho $n san pham voi gia $p/1sp la: ".tongtien($p,$n)." - (Da bao gom VAT thue 0.08%)</h3>";
			}else{
				echo "<h3>Tong tien ban phai tra cho $n san pham voi gia $p/1sp la: ".tongtien($p,$n)." - (Da bao gom VAT thue 10%)</h3>";
			}
		}
	?>

</body>
</html>