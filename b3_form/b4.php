<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BT 4</title>
</head>
<body>
	<!--
	Xây dựng 1 website bán hàng. Cho phép người dùng nhập vào đơn giá và chọn lựa số lượng món hàng. Hãy tính ra tổng tiền mà người đó phải trả (bao gồm thuế VAT 10% cho món hàng họ mua).

	Ví dụ: Mua cây viết giá 10.000 VND, số lượng là 10 vậy tổng tiền phải trả là:110.000 VNĐ (đã bao gồm thuế VAT 10%).
	-->
	<form action="xuly_b4.php" method="POST">
		Price: <input type="text" name="txtprice">
		Number: 
		<select name="number">
			<?php
				for ($i=1; $i <= 100 ; $i++) { 
					echo "<option value='$i'>$i</option>";
				}
			?>			
		</select>
		<input type='submit' name='ok' value='Submit' />
	</form>
</body>
</html>