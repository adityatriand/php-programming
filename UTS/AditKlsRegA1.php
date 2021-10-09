<?php 
	$film =
	[
		"Aftermath" => ["Reguler","3D"],
		"Kartini"=> ["Reguler","3D"],
		"Guardians of the galaxy vol.2"=>["Reguler","3D"]
	];

	$hari = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
	$jam = ["09.00","12.00","15.00","19.00","22.00"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Penjualan Tiket Bioskop</title>
 </head>
 <body>
 	 	<table>
 		<table>
 			<h3 class="judul">Form Penjualan Tiket Bioskop </h3>
 		</table>
 		<form action="AditKlsRegA1Proses.php" method="POST">
 		 <table border="1" cellspacing="3">
 			<tr>
 				<td>Nama Petugas</td>
 				<td class="text-center">:</td>
 				<td><input type="text" name="nama" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>Judul Film</td>
 				<td class="text-center">:</td>
 				<td>
 					<select name="judulfilm" class="style-input">
 						<?php foreach($film as $judulfilm => $harga) { ?>
 							<option value="<?= $judulfilm ?>"><?= $judulfilm ?></option>
 						<?php } ?>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Hari</td>
 				<td class="text-center">:</td>
 				<td>
 					<select name="hari" class="style-input">
 						<?php foreach($hari as $namahari) { ?>
 							<option value="<?= $namahari ?>"><?= $namahari ?></option>
 						<?php } ?>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Jam Tayang</td>
 				<td class="text-center">:</td>
 				<td>
 					<select name="jamtayang" class="style-input">
 						<?php foreach($jam as $jamtayang) { ?>
 							<option value="<?= $jamtayang ?>"><?= $jamtayang ?></option>
 						<?php } ?>
 					</select>
	 			</td>
	 			</tr>
 			<tr>
 				<td>Jenis Pilihan</td>
 				<td class="text-center">:</td>
 				<td>
 					<input type="radio" name="jenis" value="Reguler" id="jenis" >
 					<label for="jenis"> Reguler </label>
 					<input type="radio" id="jenis" name="jenis" value="3D">
 					<label for="jenis"> 3D </label>
	 			</td>
	 		</tr>
 			<tr>
 				<td>No Kursi</td>
 				<td class="text-center">:</td>
 				<td><input type="text" name="nokursi" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>Jumlah Tiket</td>
 				<td class="text-center">:</td>
 				<td><input type="number" name="jumlah" min="1" class="style-input"></td>
 			</tr>
 			<tr>
 				<td>
					<input type="submit" name="submit" value="Transaksi">
					<input type="reset" name="reset" value="Batal">
				</td>
			</tr>
 		 </table>
		</form>
 	</table>
 	<p>UTS Aditya Tri Ananda_09021181924019</p>
 </body>
 </html>