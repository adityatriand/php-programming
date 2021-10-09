<?php 

	$parfum =
	[
		"Wardah" => ["35","50","75","100"],
		"Regaza"=> ["35","50","70","100"],
		"Vitalis"=>["35","50","70","100"]
	];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Jualan Farfum</title>
	<style type="text/css">
		
		body
		{
			padding-top: 15%;
			background-color: #FFDAB9;
		}

		table
		{
			margin: 0 auto;
		}

		.judul
		{
			margin: 0 auto;
			width: 500px;
			height: 50px;
			line-height: 50px;
			background-color: salmon;
			color: white;
			border-radius: 1em;
			font-size: 20px;
			text-align: center;
			text-transform: uppercase;
		}

		.text-center
		{
			text-align: center;
		}

		.style-input
		{
			width: 343px;
		}

		form
		{
			margin-top: 20px;
		}

		form table
		{
			width: 500px;
			background-color: salmon;
		}

		form table tr
		{
			background-color: #FFDAB9;
		}

		button a
		{
			text-decoration: none;
			color: black;
		}

		button a:hover
		{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
 	<table>
 		<table>
 			<h3 class="judul">Form transaksi Toko Parfum Aditya</h3>
 		</table>
 		<form action="kasir.php" method="POST">
 		 <table border="1" cellspacing="3">
 			<tr>
 				<td>Id Transaksi</td>
 				<td class="text-center">:</td>
 				<td><input type="text" name="id" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>Tanggal Transaksi</td>
 				<td class="text-center">:</td>
 				<td><input type="date" name="tanggal" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>Nama Kasir</td>
 				<td class="text-center">:</td>
 				<td><input type="text" name="nama" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>Merk Parfum</td>
 				<td class="text-center">:</td>
 				<td>
 					<select name="namaparfum" class="style-input">
 						<?php foreach($parfum as $namaparfum => $ukuran) { ?>
 							<option value="<?= $namaparfum ?>"><?= $namaparfum ?></option>
 						<?php } ?>
 					</select>
	 			</td>
	 			</tr>
 			<tr>
 				<td>Ukuran Parfum</td>
 				<td class="text-center">:</td>
 				<td>
 					<select name="ukuran" class="style-input">
 						<?php foreach($parfum[$namaparfum] as $ukuran) { ?>
 							<option value="<?= $ukuran; ?>"><?= $ukuran ?></option>
 						<?php } ?>
 					</select>
	 			</td>
	 		</tr>
 			<tr>
 				<td>Jumlah Barang</td>
 				<td class="text-center">:</td>
 				<td><input type="number" name="jumlah" min="0" class="style-input"></td>
 			</tr>
 		 </table>
 		 <table border="1">
 			<tr>
 				<td align="center">
					<input type="submit" name="submit" value="Transaksi">
					<input type="reset" name="reset" value="Reset Data">
					<button><a href="awal.php">Batal</a></button>
				</td>
			</tr>
		 </table>
		</form>
 	</table>
</body>
</html>