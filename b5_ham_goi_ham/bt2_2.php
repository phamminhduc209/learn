<html>
<head>
	<title>Bai Tap 2</title>
</head>
<body>
	<form action='bt2.php' method='post'>
		Product: <input type='text' name='txtname' value='<?php echo $_POST['txtname'];?>' size='25' /><br />
		Price: <input type='text' name='txtprice' value='<?php echo $_POST['txtprice'];?>' size='15' />
		Num: <select name='num'>
			<?php
				for($i=1;$i<=100;$i++){
					if($_POST['num'] == $i){
						echo "<option value='$i' selected>$i</option>";
					}else{
						echo "<option value='$i'>$i</option>";
					}
				}
			?>
			</select><br />
		<input type='submit' name='ok' value='Order' />
	</form>
	<?php
		function tinhtien($gia,$sl){
			$temp=$gia * $sl;
			if($sl >= 30){
				$giam=$temp - $temp*0.08;
			}else{
				$giam=$temp;
			}
			$total=$giam + $giam*0.1;
			return $total;
		}
		if(isset($_POST['ok'])){
			$n=$_POST['txtname'];
			$p=$_POST['txtprice'];
			$sl=$_POST['num'];
			echo "<h3>Ban vua mua mon hang co ten la: $n</h3>";
			echo "<h3>Voi so luong la: $sl, gia tien la: $p VND</h3>";
			echo "<h3>Tong tien phai tra la: ".tinhtien($p,$sl)." VND</h3>";			
		}

	?>
</body>
</html>