<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get dengan Form</title>
</head>
<body>
	<form action="" method="POST">
		<label for="search">Nama</label>
		<input type="text" name="nama" id="nama">
		<button name="submit">KIRIM</button>
	</form>
	<?php
	if (isset($_POST["submit"])) {
		// $nama=$_POST["nama"];
		// echo "Selamat Datang, $nama";
		if(empty($_POST["nama"])){
			echo "Isi Nama anda terlebih dahulu";
		}
		else{
			$nama=$_POST["nama"];
			echo "Selamat Datang, $nama";
		}
	}
	?>
	
</body>
</html>