<?php
	session_start();
	if (!isset($_SESSION['login'])) {
		header('Location: login.php?action=notyet');
		exit;
	}  
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Daftar Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="books bg-1">
	<h1 class="text-center title-tabel">Daftar Buku</h1>
	<div class="position">
		<button class="btn btn3 font-Staatliches pad" onclick="window.location.href='tambah.php'">TAMBAH DATA BUKU</button>
		<form action="" method="POST" class="text-right">
			<input class="input" type="text" name="cari" placeholder="Masukkan Kata Kunci">
			<button name="submit" class="btn btn3 font-Staatliches">Cari</button>
		</form>
	</div>
	<table class="tabel font-DavidLibre" border="1" align="center" cellpadding="5">
		<tr class="tabel-head">
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
				<td class="text-center">
					<button class="btn btn-action hapus" onclick="hapus('<?= $book['Id_buku'] ?>');"><i class='fas fa-trash'></i></button>
					<button class="btn btn-action edit" onclick="window.location.href='edit.php?id=<?= $book['Id_buku'] ?>'"><i class='fas fa-pen'></i></button>
			</tr>
		<?php } ?>
	</table>
	<br>
	<div class="text-center">
		<button class="btn btn1 font-Staatliches" onclick="window.location.href='index.php'">HOME</button>
	</div>
</body>
<script type="text/javascript">
	function hapus(id){
		var c = confirm("Apakah anda yakin ingin menghapus ?");
		if(c == true){
			window.location.href = "hapus.php?id="+id;
		}
		else{
			alert("Data Gagal diHapus");
		}
	}
</script>
</html>