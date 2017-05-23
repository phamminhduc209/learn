<html>
<head><title>Bai Tap Xu Ly Ham </title></head>
<body>
	<form action='bt1.php' method='post'>
		So A: <input type='text' name='txtsoa' size='10' value='<?php echo $_POST['txtsoa']; ?>' />
		So B: <input type='text' name='txtsob' size='10' value='<?php echo $_POST['txtsob']; ?>' />
		<input type='submit' name='ok' value='Submit' />
	</form>
	
	<?php
	function tong($a,$b){
		$c=$a + $b;
		return $c;
	}
	function hieu($a,$b){
		$c= $a - $b;
		return $c;
	}
	function tich($a,$b){
		$c=$a * $b;
		return $c;
	}
	function thuong($a,$b){
		$c=$a/$b;
		return $c;
	}
	function tbc($a,$b){
		$c=(tong($a,$b) + hieu($a,$b) + thuong($a,$b) + tich($a,$b))/4;
		return $c;
	}
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

	function giaithua($a){
		$total=1;
		for($i=1;$i<=$a;$i++){
			$total=$total * $i;
		}
		return $total;
	}

	
	if(isset($_POST['ok'])){
		$so1=$_POST['txtsoa'];
		$so2=$_POST['txtsob'];
		echo "Tong: ". tong($so1,$so2) ."<br />";
		echo "Hieu: ". hieu($so1,$so2). "<br />";
		echo "Tich: ". tich($so1,$so2). "<br />";
		echo "Thuong: ". thuong($so1,$so2)."<br />";
		echo "Trung binh cong: ". tbc($so1,$so2). "<br />";
		if(snt($so1) == TRUE){
			echo "So $so1 la so nguyen to <br />";
		}else{
			echo "So $so1 khong la so nguyen to<br />";
		}
		echo "Giai thua cua so $so2 là: ". giaithua($so2) ."<br />";
	}
	?>

</body>
</html>