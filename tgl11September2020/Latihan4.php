<?php  

	$matkul = 
	[

		["kode"=>"FTI001117","nama"=>"Algoritma dan Pemrograman 1","sks"=>3],
		["kode"=>"FTI002117","nama"=>"Praktikum Algoritma dan Pemrograman 1","sks"=>1],
		["kode"=>"FTI003117","nama"=>"Kalkulus","sks"=>3],
		["kode"=>"FTI004117","nama"=>"Matriks Vektor","sks"=>3],
		["kode"=>"FTI005117","nama"=>"Fisika","sks"=>3],
		["kode"=>"FTI006117","nama"=>"Bahasa Inggris","sks"=>3],
		["kode"=>"FTI007117","nama"=>"Pengantar Teknologi Informasi","sks"=>2],
		["kode"=>"FTI008117","nama"=>"Pendidikan Agama","sks"=>2],
		["kode"=>"FTI009117","nama"=>"Pendidikan Pancasila","sks"=>2]

	];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4 Array</title>
</head>
<body>
	<table border="1" cellpadding="3">
		<tr>
			<td>Kode Mata Kuliah</td>
			<td>Nama Mata Kuliah</td>
			<td>SKS</td>
		</tr>
		<?php foreach($matkul as $mk) { ?>
			<tr>
				<td><?= $mk["kode"] ?></td>
				<td><?= $mk["nama"] ?></td>
				<td><?= $mk["sks"] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>