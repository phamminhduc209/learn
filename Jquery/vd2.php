<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xây dựng một menu dọc</title>
	<!-- Khai báo sử dụng thư viện Jquery -->
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<style>
		.submenu {
			display: none;
		}
		ul li.selected ul.submenu {
			display: block;
		}
	</style>
</head>
<body>
	<ul class="menu">
		<li>
			<a href="#">Menu 1</a>
			<ul class="submenu">
				<li><a href="#">Menu 1.1</a></li>
				<li><a href="#">Menu 1.2</a></li>
				<li><a href="#">Menu 1.3</a></li>
				<li><a href="#">Menu 1.4</a></li>
				<li><a href="#">Menu 1.5</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Menu 2</a>
			<ul class="submenu">
				<li><a href="#">Menu 2.1</a></li>
				<li><a href="#">Menu 2.2</a></li>
				<li><a href="#">Menu 2.3</a></li>
				<li><a href="#">Menu 2.4</a></li>
				<li><a href="#">Menu 2.5</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Menu 3</a>
			<ul class="submenu">
				<li><a href="#">Menu 3.1</a></li>
				<li><a href="#">Menu 3.2</a></li>
				<li><a href="#">Menu 3.3</a></li>
				<li><a href="#">Menu 3.4</a></li>
				<li><a href="#">Menu 3.5</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Menu 4</a>
			<ul class="submenu">
				<li><a href="#">Menu 4.1</a></li>
				<li><a href="#">Menu 4.2</a></li>
				<li><a href="#">Menu 4.3</a></li>
				<li><a href="#">Menu 4.4</a></li>
				<li><a href="#">Menu 4.5</a></li>
			</ul>
		</li>
	</ul>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".menu li a").click(function() {
				$(".menu li").removeClass('selected');
				$(this).parent().addClass('selected');	
			})
		})
	</script>
</body>
</html>
