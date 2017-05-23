<?php
$a=500;
$b=300;
define("MAX",$a);
$c=$a*2 + $b*3 + MAX; //500*2 + 300*3 + 500 = 2400
if($c == 5000){
	echo "ABCD";
}else{
	echo "BCDE";
}
?>