<?php
$mahasiswa=[
	["nama"=>"Ferza","domisili"=>"Palembang","jk"=>"Laki-laki","nim"=>"978676","foto"=>"1.jpg"],
	["nim"=>"978677","nama"=>"Diaz","domisili"=>"Indralaya","jk"=>"Perempuan","foto"=>"1.jpg"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
	<?php foreach ($mahasiswa as $mhs) {
	?>
		<ul>
			<li>Foto : <img src="img/<?= $mhs["foto"]?>" width=50></li>
			<li>NIM : <?= $mhs["nim"]?></li>
			<li>Nama : <?= $mhs["nama"]?></li>
			<li>Tempat : <?= $mhs["domisili"]?></li>
			<li>Jenis Kelamin : <?= $mhs["jk"]?></li>
		</ul>
	<?php } ?>
	
</body>
</html>