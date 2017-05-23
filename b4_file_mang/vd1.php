<?php
	$p = fopen("a.txt", "r");
	echo fgets($p);
	fclose($p);
?>