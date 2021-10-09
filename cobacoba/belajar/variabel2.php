<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan PHP pada HTML</title>
</head>
<body>
	SELAMAT DATANG DI PHP SAYA <br>
	<?php
		$kampus = "Universitas Sriwijaya";
		$jurusan = "S1 Teknik Informatika";
		$alamat = "Jl. Indralaya"
	?>
	<?php
		echo "$kampus, $jurusan, $alamat.<br>"; //echo untuk variabel banyak
	?>
</body>
</html>