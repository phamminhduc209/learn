// Xây dựng trang ý kiến phản hồi cho phép người dụng gửi thông tin của họ trên website bao gồm (tên, email, và nội dung phản hồi).
// Nếu người dùng không nhập thông tin thì báo lỗi. Nếu người dùng có nhập đầy đủ thông tin, hãy xuất các thông tin ấy và ẩn biểu mẫu nhập liệu

// Javascript Document

	function create_ajax() {
		td = navigator.appName;
		if (td == "Microsoft Internet Explorer") {
			obj = new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			obj = new XMLHttpRequest();
		}
		return obj;
	}

	var http = create_ajax();

	function comment() {
		// get value at input asign variable
		n = encodeURI(document.getElementById("name").value);
		e = encodeURI(document.getElementById("email").value);
		m = encodeURI(document.getElementById("mess").value);
		// method and send data
		http.open("post","process.php",true);
		// charset=UTF-8
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
		// function process get turn result
		http.onreadystatechange = process;
		// sent data at method post
		http.send("name="+n+"&email="+e+"&mess="+m);
	}

	function process() {
		if (http.readyState == 4 && http.status == 200) {
			kq = http.responseText;
			if (kq == 1) {
				document.getElementById("ketqua").innerHTML = "Please enter your full information!!!";
			} else {
				document.getElementById("ketqua").innerHTML = kq;
				document.getElementById("formid").style.display = "none";
			}
		}
	}