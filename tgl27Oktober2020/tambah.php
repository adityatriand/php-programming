<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('Location: login.php?action=btrju5q9de');
	exit;
}  
require 'function.php';
$penerbit = ["Erlangga","Elex Media","Grasindo","Informatika","Lainnya"];
$get = "SELECT max(Id_buku) as maxID FROM tb_buku";
$data = query($get)[0];
$id = (int) substr($data['maxID'],3);
$id++;
$huruf = "A";
$id = $huruf.sprintf("%03s",$id);

if(isset($_POST["submit"])){
	if(tambah($_POST)>0){
		echo "<script> alert('Data Berhasil Ditambahkan');
		location.href='home.php';</script>";
	}
	else{
		echo "<script> alert('Data Gagal Ditambahkan');
		location.href='home.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tambah Data Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="middle bg-1">
	<form action="" method="POST">
		<h1 class="text-center title-tabel">Tambah Data Buku</h1>
		<table align="center" cellpadding="5" class="tabel-tambah font-DavidLibre">
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="id" id="a" required readonly value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" id="a" required></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" id="a"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>
 					<select name="penerbit" id="a">
 						<?php foreach($penerbit as $nama) { ?>
 							<option value="<?= $nama ?>"><?= $nama ?></option>
 						<?php } ?>
 					</select>
	 			</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="kategori[]" value="Buku Programming">Buku Programming<br>
					<input type="checkbox" name="kategori[]" value="Buku Komputer">Buku Komputer<br>
					<input type="checkbox" name="kategori[]" value="Lainnya">Lainnya<br>
				</td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td>:</td>
				<td><input type="number" name="jumlah" min="0" id="a" required></td>
			</tr>
			<tr>
				<td>Resensi</td>
				<td>:</td>
				<td><textarea name="resensi" cols="32" rows="10" style="padding: 5px;"></textarea></td>
			</tr>
		</table>
		<br>
		<div class="text-center">
			<button type="submit" name="submit" class="btn btn2 font-Staatliches"> Kirim </button>
			<button type="reset" name="submit" class="btn btn2 font-Staatliches"> Reset </button>
			<button class="btn btn2 font-Staatliches" onclick="window.location.href='home.php'">Kembali</a></button>
		</div>
	</form>
</body>
</html>