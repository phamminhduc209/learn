<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload File</title>
</head>
<body>
	<form action="xuly_upload_file.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="img" accept="file_extension|audio/*|video/*|image/*|media_type">
		<input type="submit" name="ok" value="Upload">
	</form>
</body>
</html>