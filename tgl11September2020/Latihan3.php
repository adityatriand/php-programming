<?php  

	$matkul = 
	[
		"FTI001117"=>"Algoritma dan Pemrograman 1",
		"FTI002117"=>"Prkatikum Algoritma dan Pemrograman 1",
		"FTI003117"=>"Kalkulus",
		"FTI004117"=>"Matriks Vektor",
		"FTI005117"=>"Fisika", 
		"FTI006117"=>"Bahasa Inggris"
	];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Array</title>
</head>
<body>
	
	<?php $matkul["FTI007117"]="Pengantar Teknologi Informasi"?>
	<?php $matkul["FTI008117"]="Pendidikan Agama" ?>
	<?php $matkul["FTI009117"]="Pendidikan Pancasila" ?>

	<h3>Daftar mata kuliah dan Kode mata kuliahnya : </h3>
	<ul>
		<?php foreach($matkul as $kode => $nama) { ?>
			<li><?= $kode .":". $nama ?></li><br>
		<?php } ?>
	</ul>
</body>
</html>