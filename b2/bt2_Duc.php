<?php
echo "<table border='1'>";
	echo "<tr>";
		for ($a=2; $a <= 10; $a++) { 
			echo "<td>";
				for ($b=0; $b <= 10 ; $b++) { 
					echo "$a * $b = ". $a * $b . "<br />" ;
				}
			echo "</td>";
		}
	echo "</tr>";
echo "</table>";
?>