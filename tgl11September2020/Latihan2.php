<?php  

	$matkul = 
	[
		"Algoritma dan Pemrograman 1",
		"Prkatikum Algoritma dan Pemrograman 1",
		"Kalkulus",
		"Matriks Vektor",
		"Fisika", 
		"Bahasa Inggris"
	];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 Array</title>
</head>
<body>
	<h3>Daftar mata kuliah di Teknik Informatika Awal : </h3>
	<ul>
		<?php foreach ($matkul as $mk) { ?>
			<li><?= $mk ?></li>
		<?php } ?>
	</ul>
	
	<?php array_push($matkul, "Pengantar Teknologi Informasi") ?>
	<?php array_push($matkul, "Pendidikan Agama") ?>
	<?php array_push($matkul, "Penndidikan Pancasila") ?>
	
	<br>

	<h3>Daftar mata kuliah di Teknik Infomatika Baru : </h3>
	<ul>
		<?php foreach($matkul as $mk) { ?>
			<li><?= $mk ?></li>
		<?php } ?>
	</ul>
</body>
</html>