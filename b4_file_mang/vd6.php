<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hàm Hỗ Trợ Mảng</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<?php
					echo "Gộp mảng trong PHP<br />";
					$a = array("a", "b", "c", "d");
					$b = array("1", "2", "3", "4");
					$c = array_merge($a,$b);
					foreach ($c as $key => $value) {
						echo "$key : $value<br />";
					}
				?>
			</div>

			<div class="col-sm-3">
				<?php
					echo "Tách mảng trong PHP<br />";
					$e = array("1", "2", "3", "4", "a", "b", "c", "d");
					$f = array_slice($e,1,8);
					foreach ($f as $key => $value) {
						echo "$key : $value<br />";
					}
				?>
			</div>

			<div class="col-sm-3">
				<?php
					// sort($m) -> sắp xếp theo chiều tăng dần bảng chữ cái or tăng dần
					echo "Sắp xếp sort<br />";
					$a = array("z", "a", "d", "c", "f");
					sort($a);
					foreach ($a as $key => $value) {
						echo "$key : $value<br />";
					}
				?>
			</div>

			<div class="col-sm-3">
				<?php
					// rsort($m) -> sắp xếp ngược theo chiếu của Sort
					echo "Sắp xếp rsort<br />";
					$a = array("z", "a", "d", "c", "f");
					rsort($a);
					foreach ($a as $key => $value) {
						echo "$key : $value<br />";
					}
				?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<?php
					// asort($m) vs ksort($m)
					echo "<div class='pull-left'>";
						echo "Sắp xếp asort<br />";
						$a = array("5" => "z", "4" => "a", "1" => "d", "2" => "g", "3" => "f");
						asort($a);
						foreach ($a as $key => $value) {
							echo "$key : $value<br />";
						}
					echo "</div>";

					echo "<div class='pull-right'>";
						echo "Sắp xếp ksort<br />";
						ksort($a);
						foreach ($a as $key => $value) {
							echo "$key : $value<br />";
						}
					echo "</div>";
				?>
			</div>
			
			<div class="col-sm-4">
				<?php
				echo "<div class='pull-left'>";
					// arsort($m) vs krsort($m)
					echo "Sắp xếp arsort<br />";
					$a = array("5" => "z", "4" => "a", "1" => "d", "2" => "g", "3" => "f");
					arsort($a);
					foreach ($a as $key => $value) {
						echo "$key : $value<br />";
					}
				echo "</div>";

				echo "<div class='pull-right'>";
					echo "Sắp xếp krsort<br />";
					krsort($a);
					foreach ($a as $key => $value) {
						echo "$key : $value<br />";
					}
				echo "</div>";
				?>
			</div>

			<div class="col-sm-4">
				<?php
					// in_array("phần tử",$m)
					echo "Tìm kiếm phần tử in_array<br />";
					$a = array("5" => "z", "4" => "a", "1" => "d", "2" => "g", "3" => "f");
					// Do hàm in_array trả về kết quả true|false, dùng mệnh đề if để sử dụng hàm in_array
					if (in_array("z", $a)) {
						echo "Tìm thấy.";
					}else{
						echo "Không tìm thấy.";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>