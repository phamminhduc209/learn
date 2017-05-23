<?php
	if (isset($_COOKIE['name'])) {
		echo "Xin chao, ".$_COOKIE['name'];
	}else{
		echo "Chay vd1 truoc khi vao trang nay";
	}
?>