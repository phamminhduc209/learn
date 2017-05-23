<?php
	// 3- Hãy liệt kê tất cả những số lẻ trong dãy số từ 1 tới 30 nhưng không bao gồm số 9, 11, 13

	$a = 1;
	while ($a <= 30) {
		if ($a % 2 != 0 && $a != 9 && $a != 11 && $a != 13) {
			echo "$a <br />";
		}
	$a++;
	}
?>