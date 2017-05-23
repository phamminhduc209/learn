<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment Jquery-Ajax</title>
	<script language="javascript" src="../../jquery-3.1.0.min.js"></script>
	<link rel="stylesheet" href="style.css" rel="stylesheet">
	<script language="javascript">
		$(function() {
			$("#btnSubmit").click(function(){
				n = $("#txtuser").val();
				e = $("#txtmail").val();
				m = $("#txtmess").val();
				// alert(n + m + c);
				$.ajax({
					url: "info.php",
					type: "post",
					data: "name="+n+"&email="+e+"&info="+m,
					async: true,
					success: function(kq){
						if (kq == 1) {
							$("#comment").html("Please Input Full Info");
						} else {
							// $("#comment").html(kq);
							// $("#formid").hide();
							$("#comment").append(kq);
							$("#txtuser").val("");
							$("#txtmail").val("");
							$("#txtmess").val('');
						}
					}
				})
				return false;
			})
		})
	</script>
</body>
</head>
<body>
	<div id="comment">
	<?php
		include 'process.php';
	?>
	</div>
	<form action="" method="post" id="formid">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtuser" id="txtuser"></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><input type="email" name="txtmail" id="txtmail"></td>
			</tr>
			<tr>
				<td>Info</td>
				<td><textarea name="txtmess" id="txtmess"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" id="btnSubmit">Submit</button></td>
			</tr>
		</table>
	</form>
</html>