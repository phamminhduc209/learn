function create_singer() {
	td = navigator.appName;
	if (td == "Microsoft Internet Explorer") {
		obj = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		obj = new XMLHttpRequest();
	}
	return obj;
}

var http = create_singer();

// Singer
function showsinger(id) {
	if (id == 0) {
		alert("Vui long chon ca si");
	} else {
		http.open("get","process.php?sid="+id,true);
		http.onreadystatechange = porcess;
		http.send(null);
	}
}

// Show Album
function showalbum(id) {
	if (id == 0) {
		alert("Vui Long Chon Album");
	} else {
		http.open("get","process.php?type=2&sid="+id,true);
		http.onreadystatechange = process2;
		http.send(null);
	}
}

// Play song
function playsong(id) {
	http.open("get","process.php?type=3&sid="+id,true);
	http.onreadystatechange = process3;
	http.send(null);
}

function showlyric() {
	document.getElementById("lyric").style.display = "block";
}

// Singer
function porcess() {
	if (http.readyState == 4 && http.status == 200) {
		kq = http.responseText;
		document.getElementById("ketqua").innerHTML = kq;
	}
}

//  Album
function process2() {
	if (http.readyState == 4 && http.status == 200) {
		kq2 = http.responseText;
		document.getElementById("listsong").innerHTML = kq2;
	}
}

//  Play song
function process3() {
	if (http.readyState == 4 && http.status == 200) {
		kq3 = http.responseText;
		document.getElementById("playsong").innerHTML = kq3;
		document.getElementById("lyric").style.display = "none";
	}
}