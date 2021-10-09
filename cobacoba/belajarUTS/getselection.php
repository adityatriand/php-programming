<?php
	
	if (empty($_GET["nama"]) && empty($_GET["nilai"])) {
		echo "Isi Field Yang Masih Kosong";
		echo "<button><a href= 'selection.php' > Kembali </a></button>";
		exit;
	}
	else{
		$nilai = $_GET["nilai"];
		$grade = "";   
		if ($nilai >= 86) {
			$grade = "A";
		}
		elseif ($nilai >= 76 && $nilai <= 85) {
			$grade = "B";
		}
		else {
			$grade = "C";
		}	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil Penilaian</title>
</head>
<body>
	<table>
		<tr>
			<td>Nama : <?= $_GET["nama"] ?> </td>
		</tr>
		<tr>
			<td>Nilai : <?= $_GET["nilai"] ?></td>
		</tr>
		<tr>
			<td>Grade Anda : <?= $grade ?></td>
		</tr>
	</table>
</body>
</html>