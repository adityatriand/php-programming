<?php  
require 'function.php';
$id = $_GET['id'];
$get = "SELECT * FROM tb_buku WHERE Id_buku = '$id'";
$books = query($get)[0];
$kategori=explode(', ',$books['Kategori']);
$penerbit = ["Erlangga","Elex Media","Grasindo","Informatika"];
if(isset($_POST["submit"])){
	if(edit($_POST)>0){
		echo "<script> alert('Data Berhasil Diubah');
		location.href='index.php';</script>";
	}
	else{
		echo "<script> alert('Data Gagal Diubah');
		location.href='index.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr>
				<td colspan="3">Edit Data Buku</td>
			</tr>
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?= $books['Id_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" value="<?= $books['Judul_buku'] ?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" value="<?= $books['Penulis'] ?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>
 					<select name="penerbit" class="style-input">
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
					<input type="checkbox" name="kategori[]" value="Buku Agama" <?php if(in_array("Buku Agama",$kategori)){echo "checked=checked";} ?>>Buku Agama<br>
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
				<td><textarea name="resensi" cols="30" rows="6"><?= $books['Resensi'] ?></textarea></td>
			</tr>
			<tr>
				<td colspan="3">
					<button name="submit">Kirim</button>
					<button><a href="index.php" style="text-decoration: none; color: black;">Kembali</a></button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>