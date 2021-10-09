<?php  
require 'function.php';
$penerbit = ["Erlangga","Elex Media","Grasindo","Informatika"];
if(isset($_POST["submit"])){
	if(tambah($_POST)>0){
		echo "<script> alert('Data Berhasil Ditambahkan');
		location.href='index.php';</script>";
	}
	else{
		echo "<script> alert('Data Gagal Ditambahkan');
		location.href='index.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr>
				<td colspan="3" align="center">Tambah Data Buku</td>
			</tr>
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>
 					<select name="penerbit" class="style-input">
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
					<input type="checkbox" name="kategori[]" value="Buku Agama">Buku Agama<br>
				</td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td>:</td>
				<td><input type="number" name="jumlah" min="0"></td>
			</tr>
			<tr>
				<td>Resensi</td>
				<td>:</td>
				<td><textarea name="resensi" cols="30" rows="6"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submit" value="Kirim">
					<input type="reset" name="reset" value="Reset">
					<button><a href="index.php" style="text-decoration: none; color: black;">Kembali</a></button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>