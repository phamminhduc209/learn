<?php
	$p = fopen("count.txt", "r");
	$online = fgets($p);
	fclose($p);
	$online++;
	$p = fopen("count.txt", "w");
	fwrite($p, $online);
	fclose($p);
	echo "So luot truy cap: $online";
?>