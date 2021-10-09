<?php  

$conn = mysqli_connect("localhost","root","") or die("Koneksi Gagal") ;
$db = mysqli_select_db($conn,"db_data") or die("Database tidak ada");
$get = "SELECT * FROM tb_data";
$query = mysqli_query($conn,$get);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Alamat</title>
</head>
<body>
	<h1 class="text-center">DATA ALAMAT</h1>
	<a href="#">[Isi Data Alamat]</a>
	<a href="#">[Lihat Data Alamat]</a>
	<table>
		<?php while($data = mysqli_fetch_assoc($query)) { ?>
			<tr style="height: 20px;"></tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $data['nama'] ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $data['alamat'] ?></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td>:</td>
				<td><?php echo $data['telp'] ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $data['email'] ?></td>
			</tr>
			<tr>
				<td>Catatan</td>
				<td>:</td>
				<td><?php echo $data['catatan'] ?></td>
			</tr>
		<?php } ?>
</body>
</html>