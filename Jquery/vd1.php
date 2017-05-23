<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rút tỉa kinh nghiệm</title>
	<!-- Khai báo sử dụng thư viện Jquery -->
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<style type="text/css" media="screen">
		.hidden {
			display: none;
		}
	</style>
</head>
<body>
	<form action="#" method="post">
		Your Name: <input type="text" name="txtname" value="" id="txtname">
		<button type="submit" name="ok" id="ok">Submit</button>
	</form>
	<div id="ketqua"></div>

	<div id="rainny" class="hidden">
		<p>Name: Rainny</p>
		<p>Age: 24</p>
		<p>Job: Front End Dev</p>
	</div>

	<div id="kenney" class="hidden">
		<p>Name: Kenny</p>
		<p>Age: 24</p>
		<p>Job: Teagcher</p>
	</div>

	<div id="luffy" class="hidden">
		<p>Name: Luffy</p>
		<p>Age: 24</p>
		<p>Job: One Piece</p>
	</div>

	<script>
		$(document).ready(function() {	
			$("#ok").click(function() {
				// get value in input assign variable na
				na = $("#txtname").val();
				$("#ketqua").html("Xin Chào, " + na + " (<a href='#' id='showinfo'>Profile</a>)");
				$("a#showinfo").click(function() {
					$("#"+na).slideToggle();	
				})
				return false;
			})
		})
	</script>
</body>
</html>
