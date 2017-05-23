<?php
	$p = fopen("b.txt", "w");
	$tr = "Hom qua tat nuoc dau dinh \r\nBo quen laptop tren canh hoa sen";
	fwrite($p, $tr);
	echo "Ghi file thanh cong";
	fclose($p);
?>