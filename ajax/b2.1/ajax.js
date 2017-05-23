// // Javascript Document

	// Comfirm user use browser
	function create_login() {
		td = navigator.appName;
		// If is td == IE
		if (td == "Microsoft Internet Exploere") {
			// Initialization variable obj - browser IE
			obj = new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			// Initialization variable obj - browser orther
			obj = new XMLHttpRequest();
		}
		return obj;
	}

	// Initialization variable http = function create_login
	var http = create_login();

	// fucntion login get, send, process
	function login() {
		// Loading.gif
		document.getElementById("ketqua").innerHTML = "<img src='loading.gif' />";
		// Get value of input username
		u = encodeURI(document.getElementById("txtuser").value);
		// Get value of input password
		p = encodeURI(document.getElementById("txtpass").value);
		// send data = method get, line and value and asyn = true
		http.open("get","check.php?user="+u+"&pass="+p,true);
		// get result = process
		http.onreadystatechange = process;
		// send data
		http.send(null);
	}

	// fucntion process
	function process() {
		// check condition
		if (http.readyState == 4 && http.status == 200) {
			// Get Result, Because is text and assigned for kq
			kq = http.responseText;
			if (kq == 1) {
				// Show error if username or password are wrong
				document.getElementById("ketqua").innerHTML = "Wrong Username Or Password";
			} else {
				// // Show result if username or password are right
				document.getElementById("ketqua").innerHTML = kq;
				// Hide form login
				document.getElementById("formid").style.display = "none";
			}
		}
	}
	