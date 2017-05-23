<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Include CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Include Javascript -->
	<script src="js/jquery-2.2.4.min.js"></script>
	
	<!-- Silent Love -->
	<!--<script type="text/javascript" src="js/create.js"></script>-->

</head>
<body>

	<?php

		// echo thongtin
		// Chuoi (text, html)
		echo "Hello, <b>PHP</b>" . " <font color='red'>How are u???</font>";

		//bt1	
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td>QHOline.info</td>";
		echo "<td>VNexpress.Net</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Dantri.com.vn</td>";
		echo "<td>Vietnamnet.vn</td>";
		echo "</tr>";
		echo "</table>";

		//bt2
		// Bien
		// Chuoi vs Bien
		echo "Mac's" . '"$ la tat ca!!!"' . "<br>";

		//BT3
		$a = "Hello";
		$$a = "xinchao";
		$$$a = "goodbye";
		echo $xinchao . "<br>";

		//hang
		// hang khong the noi suy trong mot chuoi
		define("MAX", 500);
		echo "Gia Tri ".MAX ."<br>";

		$a = 500;
		$b = $a + 500;
		define("MAX_1", $b);
		echo $a + $b + MAX_1;

		// Toan tu
		// phep gan
		$a = 500;
		$a = "hello";
		echo "<br>" .$a;

		// phep toan hoc
		// + - * / %
		$a = 10;
		$b = 5;
		echo "<br>".$a%$b;

		// phep so sanh
		// < > <= >= == !=

		// phep logic
		// AND => &&
		// DTB > 8 AND HK == GIOI ==>
		// TRUE && TRUE ==> TRUE
		// FALSE && TRUE ==> FALSE

		// OR
		// DTB > 5 OR HK = GIOI ==> TRUE
		// TRUE || TRUE ==> TRUE
		// FALSE || TRUE ==> TRUE

		// Phep ket hop
		// $a = $a + 1 ==> $a++
		// $a = $a -1 ==> $a--
		// $a++ vs ++$a
		$a = 5;
		$a++;
		echo "<br>" . $a;
		$b = 5;
		echo "<br>" . ++$b;

	?>

	<?php

		$a = 5;
		echo $a++ + ++$a;

	?>

</body>
</html>