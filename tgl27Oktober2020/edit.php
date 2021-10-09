<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('Location: login.php?action=btrju5q9de');
	exit;
}

if(!isset($_GET['id'])){
	header('Location: tambah.php');
	exit;
}

require 'function.php';
$id = $_GET['id'];
$get = "SELECT * FROM tb_buku WHERE Id_buku = '$id'";
$books = query($get)[0];
$kategori=explode(', ',$books['Kategori']);
$penerbit = ["Erlangga","Elex Media","Grasindo","Informatika","Lainnya"];
if(isset($_POST["submit"])){
	if(edit($_POST)>0){
		echo "<script> alert('Data Berhasil Diubah');
		location.href='home.php';</script>";
	}
	else{
		echo "<script> alert('Data Gagal Diubah');
		location.href='home.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edit Data Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="middle bg-1">
	<form action="" method="POST">
		<h1 class="text-center title-tabel">Edit Data Buku</h1>
		<table align="center" cellpadding="5" class="tabel-tambah font-DavidLibre">
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="id" id="a" value="<?= $books['Id_buku'] ?>" readonly></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" id="a" value="<?= $books['Judul_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" id="a" value="<?= $books['Penulis'] ?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>
 					<select name="penerbit" id="a">
 						<?php foreach($penerbit as $nama) { ?>
 							<option value="<?= $nama ?>" <?php if($books['Penerbit']=="<?= $nama ?>"){echo "selected=selected";} ?>><?= $nama ?></option>
 						<?php } ?>
 					</select>
	 			</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="kategori[]" value="Buku Programming" <?php if(in_array("Buku Programming",$kategori)){echo "checked=checked";} ?>>Buku Programming<br>
					<input type="checkbox" name="kategori[]" value="Buku Komputer" <?php if(in_array("Buku Komputer",$kategori)){echo "checked=checked";} ?>>Buku Komputer<br>
					<input type="checkbox" name="kategori[]" value="Lainnya" <?php if(in_array("Lainnya",$kategori)){echo "checked=checked";} ?>>Lainnya<br>
				</td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td>:</td>
				<td><input type="number" name="jumlah" min="0" value="<?= $books['Jumlah_hal'] ?>"></td>
			</tr>
			<tr>
				<td>Resensi</td>
				<td>:</td>
				<td><textarea name="resensi" cols="32" rows="10" style="padding: 5px;"><?= $books['Resensi'] ?></textarea></td>
			</tr>
		</table>
		<br>
		<div class="text-center">
			<button type="submit" name="submit" class="btn btn2 font-Staatliches"> Kirim </button>
			<button type="reset" name="submit" class="btn btn2 font-Staatliches"> Reset </button>
			<button class="btn btn2 font-Staatliches b"><a href="home.php" style="text-decoration: none; color: black;">Kembali</a></button>
		</div>
	</form>
</body>
</html>