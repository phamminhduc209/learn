<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xây dựng 1 trang thêm thuốc</title>
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<body>
	<a href="#" id="add">Thêm thuốc</a>
	<form action="">
		<table id="themthuoc">
			<tr>
				<td>Thuốc 1</td>
				<td><input type="text" id="ten1" placeholder="nhập tên thuốc"></td>
			</tr>
		</table>
	<a href="#" class="xuattoathuoc">Xuất Toa Thuốc</a>
	</form>
	<div id="thuoc"></div>

	<script type="text/javascript">
		$(document).ready(function() {
			// $("#add").click(function() {
			// 	var addLine = $('.addid').length;
			// 	if (addLine < 1) {
			// 		var html = '<tr class="addid">';
			// 		html += '<td>Thuốc 1</td>';
			// 		html += '<td><input type="text" name="" value="" placeholder="nhập tên thuốc"></td>';
			// 		html += '</tr>';
			// 	} else {
			// 		var html = '<tr class="addid">';
			// 		html += '<td>Thuốc 2</td>';
			// 		html += '<td><input type="text" name="" value="" placeholder="nhập tên thuốc"> <a href="#" id-"delete">Xóa</a></td>';
			// 		html += '</tr>';
			// 	}
			// 	$("#themthuoc").append(html)
			// })
			i = 1;
			$("#add").click(function() {
				i++;
				var html = "<tr class='addid'>";
				html += "<td>Thuốc "+i+"</td>";
				html += "<td><input type='text' id='ten"+i+"' placeholder='nhập tên thuốc'> <a href='#' class='delete'>Xóa</a></td>";
				html += "</tr>";
				$("#themthuoc").append(html);

				// Del Don Thuoc
				$(".delete").click(function() {
					$(this).parent().parent().remove();
				})
			})

			$(document).on("click",".delete",function() {
				$(this).parent().parent().remove();
			})

			$(".xuattoathuoc").click(function() {
				noidung = "";
				// dem = 0;
				for (j = 1; j <= i; j++) {
					val = $("#ten"+j).val();
					if (val) {
						// dem++;
						noidung+="Thuốc "+ j+ ": "+val+"<br>";
					}
				}
				$("#thuoc").html(noidung);
			})

		})
	</script>
</body>
</html>