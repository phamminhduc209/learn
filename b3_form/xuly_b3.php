<?php
	//Tạo 1 textbox cho nhập vào 1 con số. Hãy kiểm tra xem :
	if ($_POST['txtnumber'] == NULL) {
		echo "Please enter number";
	}else{
		//+ Số đó có phải là số chẵn hay không.
		$n = $_POST['txtnumber'];
		if ($n % 2 == 0) {
			echo "So $n ban nhap la so chan <br />";
		}else{
			echo "So $n ban nhap la so le <br />";
		}
	}

	//+ Số đó có phải là số Nguyên tố hay không.
		// so nguyen to la so chia het cho 1 va cho chinh no
	$snt = 1;
	for ($i=2; $i < $n; $i++) { 
		if ($n % $i == 0) {
			$snt = 2;
			break;
		}
	}
	if ($snt == 1) {
		echo "$n la so nguyen to <br />";
	}else{
		echo "$n khong la so nguyen to <br />";
	}

	//+ Tính giai thừa của số đó. (ví dụ: 3! = 1x2x3 = 6)
	$total = 1;
	for ($i=1; $i <= $n ; $i++) { 
		$total = $total * $i;	
	}
	echo "Giai thua cua $n la $total";

?>