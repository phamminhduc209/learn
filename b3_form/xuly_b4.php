<?php
	// Kiem tra nguoi dung co nhap so gia hay khong
	if ($_POST['txtprice'] == NULL) {
		// Yeu cau nguoi dung bat buoc phai nhap gia
		echo "Please enter your price";
	}else{
		// Lay gia tien
		$p = $_POST['txtprice'];
		// Lay so luong
		$n = $_POST['number'];
	}
	// Tinh gia tien + 10% VAT
	$total = $n * $p + ($n * $p)*0.1;
	// Thong bao so tien va so luong
	echo "Ban da mua voi gia: $p, so luong  la: $n<br />";
	// Thong bao gia tien phai tra da bao gom VAT
	echo "So tien ban phai tra la $total, da bao gom VAT 10%";
?>