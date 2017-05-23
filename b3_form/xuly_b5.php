<?php

	// Kiem tra nguoi dung co nhap ten
	if ($_POST['txtname'] == NULL) {
		echo "Please Enter Your Name<br>";
	}else{
		$n = $_POST['txtname'];
	}

	// Kiem tra nguoi dung co nhap dia chi
	if ($_POST['txtaddress'] == NULL) {
		echo "Please Enter Your Address<br>";
	}else{
		$a = $_POST['txtaddress'];
	}

	// kiem tra nguoi dung co nhap file
	if ($_FILES['img']['name'] == NULL) {
		echo "Please Enter Your Avatar";
	}else{
		move_uploaded_file($_FILES['img']['tmp_name'], "data/".$_FILES['img']['name']);
		$name = $_FILES['img']['name'];
		$tmp_name = $_FILES['img']['tmp_name'];
		$size = $_FILES['img']['size'];
		$type = $_FILES['img']['type'];
	}

	//Hien thi ket qua ra man hinh
	if ($_POST['txtname'] && $_POST['txtaddress'] && $_FILES['img']['name'] && $_FILES['img']['tmp_name'] && $_FILES['img']['size'] && $_FILES['img']['type']) {
		//Lay gia tri gioi tinh gan vao bien $g
		if ($_POST['gender'] == 1) {
			$gt = "Male";
		}else{
			$gt = "Female";
		}

		// Dung switch gan gia tri vao bien $province
		switch ($_POST['province']) {
			case '1':
				$province = "Dong Nai";
				break;
			case '2':
				$province = "Vung Tau";
				break;
			
			default:
				$province = "Binh Thuan";
				break;
		}

		// hien thi ra man hinh bang cau lenh echo
		$note = $_POST['txtnote'];
		echo "Full Name: $n<br>";
		echo "Your Avatar:<br> <img src='data/$name' title='$name'/><br>";
		echo "Address: $a<br>";
		echo "Gender: $gt<br>";
		echo "Province: $province<br>";
		echo "Note: $note<br>";
		echo "<i style='font-size:20px;'>Info Picture</i><br>";
		echo "File Name: $name <br>";
		echo "tmp Name: $tmp_name <br>";
		echo "File Size: $size <br>";
		echo "File Type: $type";
	}

?>