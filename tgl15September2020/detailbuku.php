<?php 
	if (!isset($_GET["nama"]) || !isset($_GET["penerbit"]) || !isset($_GET["penulis"]) || !isset($_GET["hal"]) || !isset($_GET["resensi"]) || !isset($_GET["gambar"]) ) {
		header("Location: daftarbuku.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku <?= $_GET["nama"]; ?></title>
	<style type="text/css">		
		h3{
			text-align: center;
		}
		table{
			margin: 0 auto;
			width: 500px;
		}
		td img{
			width: 250px;
			height: 350px;
		}
	</style>
</head>
<body>
	<h3>Detail Buku Pilihanmu</h3>	
	<table>
		<table border="1">
			<tr>
				<td align="center"><img src="img/<?= $_GET["gambar"] ?>"></td>
			<tr>
		</table>
		<table border="1" cellpadding="3">
		<tr>
			<td width="200px">Judul Buku</td>
			<td>:</td>
			<td><?= $_GET["nama"] ?></td>
		</tr>
		<tr>
			<td width="200px">Penerbit</td>
			<td>:</td>
			<td><?= $_GET["penerbit"] ?></td>
		</tr>
		<tr>
			<td width="200px">Penulis</td>
			<td>:</td>
			<td><?= $_GET["penulis"] ?></td>
		</tr>
		<tr>
			<td width="200px">Jumlah Halaman</td>
			<td>:</td>
			<td><?= $_GET["hal"] ?></td>
		</tr>
		<tr>
			<td width="200px">Resensi</td>
			<td>:</td>
			<td><?= $_GET["resensi"] ?></td>
		</tr>
	</table>
	</table>
</body>
</html>