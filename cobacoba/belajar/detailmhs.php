<?php
if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["domisili"]) || !isset($_GET["jk"])) {
	//redirect
	header("Location:mahasiswa.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail mhs</title>
</head>
<body>
	<ul>
		<li>Foto : <img src="img/<?= $_GET["foto"] ?>"></li>
		<li>Nama : <?= $_GET["nama"] ?></li>
		<li>Nim : <?= $_GET["nim"] ?></li>
		<li>Domisili : <?= $_GET["domisili"] ?></li>
		<li>Jenis Kelamin : <?= $_GET["jk"] ?></li>
	</ul>
</body>
</html>