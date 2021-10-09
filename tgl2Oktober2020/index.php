<?php  
	require 'function.php';
	$get = "SELECT * FROM tb_buku";
	$books = query($get);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<style type="text/css">
		.text-center{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 class="text-center">Daftar Buku</h1>
	<table border="1" align="center" cellpadding="5">
		<tr>
			<th>ID Buku</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Jumlah Halaman</th>
			<th>Resensi</th>
			<th>Keterangan</th>
		</tr>
		<?php foreach ($books as $book) { ?>
			<tr>
				<td class="text-center"><?php echo $book['Id_buku'] ?></td>
				<td><?php echo $book['Judul_buku'] ?></td>
				<td><?php echo $book['Penulis'] ?></td>
				<td><?php echo $book['Penerbit'] ?></td>
				<td class="text-center"><?php echo $book['Jumlah_hal'] ?></td>
				<td><?php echo $book['Resensi'] ?></td>
				<td><a href="#">HAPUS</a> || <a href="#">EDIT</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>