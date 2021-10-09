<?php  
	require 'function.php';
	$get = "SELECT * FROM tb_buku";
	$books = query($get);

	if(isset($_POST['submit'])){
		$books=cari($_POST['cari']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<style type="text/css">
		.text-center{
			text-align: center;
		}
		.text-left{
			display: inline-flex !important;
			margin-left: 5%;
		}
		.text-right{
			display: inline-flex;
			margin-left: 60%;
			margin-right: 5%; 
		}
	</style>
</head>
<body>
	<h1 class="text-center">Daftar Buku</h1>
	<p class="text-left"><a href="tambah.php" style="text-decoration: none;width: 130px; height: 20px; background-color: green; color: white; text-align: center; font-size: 13px; line-height: 20px; border-radius: 5px; ">Tambah Data Buku</a></p>
	<form action="" method="POST" class="text-right">
		<input type="text" name="cari" placeholder="Masukkan Kata Kunci" autofocus>
		<button name="submit">Cari</button>
		<button><a href="index.php" style="text-decoration: none; color: black;">Undo</a></button>
	</form>
	<table border="1" align="center" cellpadding="5" style="width: 1280px;">
		<tr>
			<th>ID Buku</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th style="width: 140px;">Kategori</th>
			<th>Jumlah Halaman</th>
			<th style="width: 360px;">Resensi</th>
			<th>Keterangan</th>
		</tr>
		<?php foreach ($books as $book) { ?>
			<tr>
				<td class="text-center"><?php echo $book['Id_buku'] ?></td>
				<td><?php echo $book['Judul_buku'] ?></td>
				<td><?php echo $book['Penulis'] ?></td>
				<td><?php echo $book['Penerbit'] ?></td>
				<td><?php echo $book['Kategori'] ?></td>
				<td class="text-center"><?php echo $book['Jumlah_hal'] ?></td>
				<td><?php echo $book['Resensi'] ?></td>
				<td><a href="hapus.php?id=<?= $book['Id_buku'] ?>">HAPUS</a> || <a href="edit.php?id=<?= $book['Id_buku'] ?>">EDIT</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>