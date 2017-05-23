	// Ham getdata nhận từ sự kiện onclick để xử lý dữ liệu
	function getdata(id) {
		var http;
		// Nếu là trình duyệt là IE
		if (window.XMLHttpRequest) {
			// Code for modern browsers
			http = new XMLHttpRequest();
		} else {
			// Code for IE6, IE5
			http = new ActiveXObject("Microsoft.XMLHTTP");
		}
		// Hàm process nhận kết quả trả về
		http.onreadystatechange = function() {
			// Kiểm tra xem dữ liệu có hợp lệ hay không
			if (http.readyState == 4 && http.status == 200) {
				kq = http.responseText;
				document.getElementById("ketqua").innerHTML=kq;
			}
		}
		// Phương thức get, Trang xử lý là trang get.php, Truyền id sang trang get.php
		http.open("get","get.php?data="+id,true);
		// Gửi dữ liệu đi
		http.send(null);
	}