<?php
	$id = $_GET['sid'];
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("user_login",$conn);
	// Xuat Thong Tin Album
	if (isset($_GET['type']) && $_GET['type'] == 2) {
		echo "<table  border='1' width='400'>";
		echo "<tr>";
		echo "<td>Song ID</td>";
		echo "<td>Song Name</td>";
		echo "<td>Play</td>";
		echo "</tr>";
		$sql3 = "select * from song where album_id= '$id'";
		$query3 = mysql_query($sql3);
		while ($data3 = mysql_fetch_assoc($query3)) {
			echo "<tr>";
			echo "<td>$data3[song_id]</td>";
			echo "<td>$data3[song_name]</td>";
			echo "<td><a href='#' onclick='playsong($data3[song_id])'>Play</a.</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<div id='playsong'></div>";
	} elseif (isset($_GET['type']) && $_GET['type'] == 3) {
		$sql4 = "select * from song where song_id = '$id'";
		$query4 = mysql_query($sql4);
		$data4 = mysql_fetch_assoc($query4);
		echo "$data4[song_url]";
		echo "<br><a href='#' onclick='showlyric()'>Lyric</a>";
		echo "<div id='lyric'>$data4[song_lyric]</div>";
	} else {
		// SQL choose table
		$sql = "select * from singer where singer_id = '$id'";
		$query = mysql_query($sql);
		$data = mysql_fetch_assoc($query);
		echo "<h3>$data[singer_name]</h3>";
		echo "<img src='$data[singer_img]' width='200' />";
		echo "<p>$data[singer_info]</p>";
		// Xuat Album
		echo "<b>Album phát hành:</b>";
		echo "<select name='album' onchange='showalbum(this.value)'>";
		echo "<option value='0'>Chon Album</option>";
		$sql2 = "select * from album where singer_id = '$id'";
		$query2 = mysql_query($sql2);
		while ($data2 = mysql_fetch_assoc($query2)) {
			echo "<option value='$data2[album_id]'>$data2[album_name]</option>";
		}
		echo "</select>";
		echo "<div id='listsong' style='margin-top: 10px;'></div>";
	}
?>