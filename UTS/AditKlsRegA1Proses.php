<?php if (empty($_POST["nama"]) || empty($_POST["judulfilm"]) || empty($_POST["hari"]) || empty($_POST["jamtayang"]) || empty($_POST["jenis"]) || empty($_POST["nokursi"])|| empty($_POST["jumlah"])) { ?>
	<?php echo "Isi field yang kosong terlebih dahulu"; ?>
	<button><a href="AditKlsRegA1.php">Kembali</a></button>
	<?php exit;  ?>
<?php } ?>

<?php 

	$film =
	[
		"Aftermath" => ["Reguler"=>25000,"3D"=>35000],
		"Kartini" => ["Reguler"=>30000,"3D"=>40000],
		"Guardians of the galaxy vol.2" => ["Reguler"=>35000,"3D"=>45000]
	];
	$total = $_POST["jumlah"] * $film[$_POST["judulfilm"]][$_POST["jenis"]];
	if($total > 100000){
		$diskon = 0.05 * $total;
	}
	else{
		$diskon = 0;
	}

	$bayar = $total - $diskon;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Kasir</title>
 </head>
 <body>
 	<h3>DATA PEMBELIAN TIKET BIOSKOP</h3>
 	<table border="1">
 		<tr>
 			<td>Nama Petugas</td>
 			<td>:</td>
 			<td><?= $_POST["nama"] ?></td>
 		</tr>
 		<tr>
 			<td>Judul Film : </td>
 			<td>:</td>
 			<td><?= $_POST["judulfilm"] ?></td>
 		</tr>
 		<tr>
 			<td>Hari / Jam Tayang</td>
 			<td>:</td>
 			<td><?= $_POST["hari"] ?> / <?= $_POST["jamtayang"] ?> WIB </td>
 		</tr>
 		<tr>
 			<td>Jenis Film</td>
 			<td>:</td>
 			<td><?= $_POST["jenis"] ?></td>
 		</tr>
 		<tr>
 			<td>No Kursi</td>
 			<td>:</td>
 			<td><?= $_POST["nokursi"] ?></td>
 		</tr>
 		<tr>
 			<td>Jumlah Tiket</td>
 			<td>:</td>
 			<td><?= $_POST["jumlah"] ?></td>
 		</tr>
 		<tr>
 			<td>Total Transaksi</td>
 			<td>:</td>
 			<td>Rp. <?= $total ?></td>
 		</tr>
 		<tr>
 			<td>Diskon</td>
 			<td>:</td>
 			<td>Rp. <?= $diskon ?></td>
 		</tr>
 		<tr>
 			<td>Total Bayar</td>
 			<td>:</td>
 			<td>Rp. <?= $bayar ?></td>
 		</tr>
 	</table>
 </body>
 </html>