<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kết Quả Sồ Xố</title>
	<style>
		.mrt {
			margin-top: 5px;
		}
		.clr{
			clear: both;
		}
		.number {
			width: 70px;
			font-family: verdana;
			font-size: 14px;
			float: left;
			margin-right: 5px;
			border: 1px solid #ddd;
			text-align: center;
		}
		div#num6 {
			margin-right: 0;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<body>
	<h3>Kết Quả Sồ Xô</h3>
	<div id="num1" class="number">0</div>
	<div id="num2" class="number">0</div>
	<div id="num3" class="number">0</div>
	<div id="num4" class="number">0</div>
	<div id="num5" class="number">0</div>
	<div id="num6" class="number">0</div>
	<div class="clr"></div>
	<button class="mrt btnQuay" id="ok">Quay Số</button>

	<script language="javascript">
		$.fn.clicktoggle = function(a, b) {
		    return this.each(function() {
		        var clicked = false;
		        $(this).bind("click", function() {
		            if (clicked) {
		                clicked = false;
		                return b.apply(this, arguments);
		            }
		            clicked = true;
		            return a.apply(this, arguments);
		        })
		    })
		}
		function getnumber(){
			for(i=1;i<=6;i++){
					num=Math.floor((Math.random()*9)+1);
					$("#num"+i).html(num);
			}
		}
		var ValID;
		$(document).ready(function(){
			$("#ok").click(function(){
				ValID=setInterval("getnumber()",100);
			},function(){
				clearInterval(ValID);
			})
		})
	</script>
</body>
</html>