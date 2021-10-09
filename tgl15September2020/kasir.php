<?php if (empty($_POST["id"]) || empty($_POST["tanggal"]) || empty($_POST["nama"]) || empty($_POST["namaparfum"]) || empty($_POST["ukuran"]) || empty($_POST["jumlah"])) { ?>
	<?php echo "Isi field yang kosong terlebih dahulu"; ?>
	<button><a href="transaksi.php">Kembali</a></button>
	<?php exit;  ?>
<?php } ?>

<?php 

	$harga =
	[
		"Wardah" => ["35"=>45000,"50"=>55000,"75"=>75000,"100"=>95000],
		"Regaza"=> ["35"=>30000,"50"=>50000,"70"=>70000,"100"=>90000],
		"Vitalis"=>["35"=>25000,"50"=>40000,"70"=>65000,"100"=>80000]
	];

	$total = $_POST["jumlah"]*$harga[$_POST["namaparfum"]][$_POST["ukuran"]];
	$pajak = 0.1*$total;
	$bayar = $total + $pajak;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Kasir</title>
 </head>
 <body>
 	<h3>Data Pembelian anda</h3>
 	<table border="1">
 		<tr>
 			<td>Id Transaksi</td>
 			<td>:</td>
 			<td><?= $_POST["id"] ?></td>
 		</tr>
 		<tr>
 			<td>Tanggal Transaksi : </td>
 			<td>:</td>
 			<td><?= $_POST["tanggal"] ?></td>
 		</tr>
 		<tr>
 			<td>Nama Kasir</td>
 			<td>:</td>
 			<td><?= $_POST["nama"] ?></td>
 		</tr>
 		<tr>
 			<td>Merk Parfum</td>
 			<td>:</td>
 			<td><?= $_POST["namaparfum"] ?></td>
 		</tr>
 		<tr>
 			<td>Ukuran Parfum</td>
 			<td>:</td>
 			<td><?= $_POST["ukuran"] ?></td>
 		</tr>
 		<tr>
 			<td>Jumlah Barang</td>
 			<td>:</td>
 			<td><?= $_POST["jumlah"] ?></td>
 		</tr>
 	</table>
 	<h3>Detail Pembayaran Anda</h3>
 	<table>
 		<tr>
 			<td>Harga Satuan</td>
 			<td>:</td>
 			<td>Rp. <?=$harga[$_POST["namaparfum"]][$_POST["ukuran"]]?></td>
 		</tr>
 		<tr>
 			<td>Total Belanja</td>
 			<td>:</td>
 			<td>Rp. <?=$total?></td>
 		</tr>
 		<tr>
 			<td>Pajak</td>
 			<td>:</td>
 			<td>Rp. <?=$pajak?></td>
 		</tr>
 		<tr>
 			<td>Total Bayar</td>
 			<td>:</td>
 			<td>Rp. <?=$bayar?></td>
 		</tr>
 	</table>
 </body>
 </html>