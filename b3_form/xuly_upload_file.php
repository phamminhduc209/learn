<?php

	// Ten goc cua file    $_FILES['name']['name']
	// Ten tam cua file    $_FILES['name']['tmp_name']
	// Kich thuoc cua file $_FILES['name']['size']
	// Dinh dang cua file  $_FILES['name']['type']
	
	// upload len sever voi ten tam, sau do luu file vao folder va doi ten thanh ten goc.
	// Move_uploaded_file($_FILES['name']['tpm_name'], "data/".$_FILES['name']['name']);
	//var_dump('<prev', $_POST);die;

	// bien moi truong $_FILES
	if ($_FILES['img']['name'] != NULL) { 
		// kiem tra dinh dang file
		if ($_FILES['img']['type'] == "image/jpeg") {
			move_uploaded_file($_FILES['img']['tmp_name'],"data/".$_FILES['img']['name']); // ham upload file
			echo "Upload File Complete <br>";           // hien thi thong bao thanh cong
			$n = $_FILES['img']['name']; 	           // ten file
			$tmp = $_FILES['img']['tmp_name'];        // ten tam
			$s = $_FILES['img']['size'];	         // size file
			$t = $_FILES['img']['type'];	        // dinh dang file
			echo "File Name: $n <br>";
			echo "TMP Name: $tmp <br>";
			echo "File Size: $s <br>";
			echo "File Type: $t <br>";
			echo "<img src='data/$n' title='$n'/>"; // duong dan file
		}else{
			echo "Dinh dang file khong hop le";
		}
		
	}else{
		echo "Please Enter Your File";   // ban user nhap file
	}
?>