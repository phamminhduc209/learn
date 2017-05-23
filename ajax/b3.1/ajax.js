// Mở rộng: Liệt kê các ý kiến có sẵn trong cơ sở dữ liệu.
// Khi gởi ý kiến mới, hãy lưu vào cơ sở dữ liệu, và hiển thị ý kiến vừa cập nhật. Đồng thời dữ liệu trong biểu mẫu sẽ xóa trắng phần nội dung.

// Javascript Document

	function create_com() {
		td = navigator.appName;
		if (td == "Micrisoft Internet Explorer") {
			obj = new ActiveXObject("Micrisoft.XMLHTTP");
		} else {
			obj = new XMLHttpRequest;
		}
		return obj;
	}

	var http = create_com();

	function comment() {
		n = encodeURI(document.getElementById("name").value);
		e = encodeURI(document.getElementById("email").value);
		m = encodeURI(document.getElementById("mess").value);
		// Method and sent data
		http.open("post","process.php",true);
		// charset=UTF-8
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
		// get result back
		http.onreadystatechange = process;
		// send data
		http.send("name="+n+"&email="+e+"&mess="+m);
	}

	function loadcmt() {
		http.open("get","process.php?data=all",true);
		// get result back
		http.onreadystatechange = process2;
		http.send(null);
	}

	function process2() {
		if (http.readyState == 4 && http.status == 200) {
			kq2 = http.responseText;
			document.getElementById("ketqua").innerHTML = kq2;
		}
	}

	function process() {
		if (http.readyState == 4 && http.status == 200) {
			kq = http.responseText;
			if (kq == 1) {
				document.getElementById("ketqua").innerHTML = "Please Enter Full Your Infomation!!!";
			} else {
				document.getElementById("ketqua").innerHTML = kq;
				loadcmt();
				// document.getElementById("formid").style.display = "none";
				document.getElementById("mess").value = "";
			}
		}
	}