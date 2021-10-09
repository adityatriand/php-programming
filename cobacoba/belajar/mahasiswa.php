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
	<title>List Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
	<?php
	foreach ($mahasiswa as $mhs) { ?>
		<li><a href="detailmhs.php?nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&domisili=<?= $mhs["domisili"]?>&jk=<?= $mhs["jk"]?>&foto=<?= $mhs["foto"]?>"><?= $mhs["nama"] ?></a></li>
	<?php }	?>

</body>
</html>



