<?php  

	$digit = 22;
	$kategori = $digit%5;
	if ($kategori==1) {
		$judul="Nama Fakultas di Universitas Sriwijaya";
		$arr =
		[

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "Fakultas Ilmu Komputer",
				"tahun" => 1985,
				"jumlah" => 5,
				"dekan" => "Jaidan Jauhari, S. Pd. M.T."
			],

			[
				"gambar" => "fakultas2.jpg",
				"nama" => "Fakultas Ekonomi",
				"tahun" => 1960,
				"jumlah" => 9,
				"dekan" => "Prof.Dr. Taufiq marwah M.Si"
			],

			[
				"gambar" => "fakultas3.jpg",
				"nama" => "Fakultas Kedokteran",
				"tahun" => 1962,
				"jumlah" => 16 ,
				"dekan" => "dr. H. Syarif Husin, M. S."
			],

			[
				"gambar" => "fakultas4.jpg",
				"nama" => "Fakultas Hukum",
				"tahun" =>1960,
				"jumlah" => 2 ,
				"dekan" => " Dr. Febrian, SH., MS"
			],

			[
				"gambar" => "fakultas5.jpg",
				"nama" => "Fakultas MIPA",
				"tahun" =>1989 ,
				"jumlah" => 10,
				"dekan" => "Prof. Dr. Iskhaq Iskandar, M.Sc."
			]
		];
	}
	elseif ($kategori==2) {
		$judul="Nama Dosen di jurusan TI ";
		$arr =
		[

			[
				"gambar" => "dosen1.jpg",
				"nama" => "Drs. Megah Mulya, M.T.",
				"napil" => "Pak Megah",
				"nip" => "196602202006041001",
				"jk" => "Laki - Laki"
			],

			[
				"gambar" => "dosen2.jpg",
				"nama" => "Drs. Saparudin, M.T., Ph.D.",
				"napil" => "Pak Saparudin",
				"nip" =>"196904121995021001" ,
				"jk" => "Laki - Laki"
			],

			[
				"gambar" => "dosen3.jpg",
				"nama" => "Syamsuryadi, S.Si., M.Kom., Ph.D.",
				"napil" => "Pak Sam",
				"nip" => "197102041997021003",
				"jk" => "Laki - Laki"
			],

			[
				"gambar" => "dosen4.jpg",
				"nama" => "Julian Supardi, S.Pd., M.T.",
				"napil" => "Pak Julian",
				"nip" =>"197207102010121001" ,
				"jk" => "Laki - Laki"
			],

			[
				"gambar" => "dosen5.jpg",
				"nama" => "Rifkie Primartha, S.T., M.T.",
				"napil" =>"Pak Rifki" ,
				"nip" => "197706012009121004",
				"jk" => "Laki - Laki"
			]
		];
	}
	elseif($kategori==3){
		$judul="Unit Kegiatan Mahasiswa di TI";
		$arr =
		[

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "BEM KM Fasilkom",
				"visi" => "bla",
				"misi" => "bla",
				"ketua" => "bla"
			],

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "HMIF",
				"visi" => "bla",
				"misi" => "bla",
				"ketua" =>"bla"
			],

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "WIFI",
				"visi" => "bla",
				"misi" => "bla",
				"ketua" =>"bla"
			],

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "FASCO",
				"visi" => "bla",
				"misi" => "bla",
				"ketua" => "bla"
			],

			[
				"gambar" => "fakultas1.jpg",
				"nama" => "KPU Fasilkom",
				"visi" => "bla",
				"misi" => "bla",
				"ketua" =>"bla"
			]
		];
	}
	elseif ($kategori==4) {
		$judul="Bahasa Pemrograman yang dipelajari";
		$arr =
		[

			[
				"gambar" => "logo1.png",
				"nama" => "Java",
				"tahun" => 1991,
				"tingkat" => "Tinggi",
				"penemu" => "James Gosling"
			],

			[
				"gambar" => "logo2.jpg",
				"nama" => "C++",
				"tahun" => 1980,
				"tingkat" => "Menengah",
				"penemu" => "Bjarne Stroustrup"
			],

			[
				"gambar" => "logo3.jpg",
				"nama" => "Python",
				"tahun" => 1990,
				"tingkat" => "Tinggi",
				"penemu" => "Guido van Rossum"
			],

			[
				"gambar" => "logo4.jpg",
				"nama" => "PHP",
				"tahun" => 1995,
				"tingkat" => "Tinggi",
				"penemu" => "Rasmus Lerdorf"
			],

			[
				"gambar" => "logo5.jpg",
				"nama" => "Ruby",
				"tahun" => 1995,
				"tingkat" => "Menengah",
				"penemu" => "Yukihiro Matsumoto"
			]
		];
	}
	else{
		$judul="Program studi di Fakultas Ilmu Komputer";
		$arr =
		[

			[
				"nama" => "fakultas1.jpg",
				"tahun" => "Fakultas Ilmu Komputer",
				"kajur" => "bla",
				"sekjur" => "bla",
				"akre" => "bla"
			],

			[
				"nama" => "fakultas1.jpg",
				"tahun" => "Fakultas Ilmu Komputer",
				"kajur" => "bla",
				"sekjur" =>"bla" ,
				"akre" => "bla"
			],

			[
				"nama" => "fakultas1.jpg",
				"tahun" => "Fakultas Ilmu Komputer",
				"kajur" => "bla",
				"sekjur" =>"bla" ,
				"akre" => "bla"
			],

			[
				"nama" => "fakultas1.jpg",
				"tahun" => "Fakultas Ilmu Komputer",
				"kajur" => "bla",
				"sekjur" =>"bla" ,
				"akre" => "bla"
			],

			[
				"nama" => "fakultas1.jpg",
				"tahun" => "Fakultas Ilmu Komputer",
				"kajur" => "bla",
				"sekjur" => "bla",
				"akre" => "bla"
			]
		];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5 Array</title>
</head>
<body>
	<h3><?= $judul ?></h3>
	<ul>
		<?php foreach ($arr as $ar) { ?>
			<?php if ($kategori==1) { ?>
				<li> Gambar : <img src="img/<?= $ar["gambar"]?>" width="100"></li>
				<li> Nama Fakultas : <?= $ar["nama"]?></li>
				<li> Tahun Beridri : <?= $ar["tahun"]?></li>
				<li> Jumlah Prodi : <?= $ar["jumlah"]?></li>
				<li> Nama Dekan : <?= $ar["dekan"]?></li><br><br>
			<?php } ?>
			<?php if ($kategori==2) { ?>
				<li>Foto : <img src="img/<?= $ar["gambar"]?>" width="100"></li>
				<li>Nama Dosen : <?= $ar["nama"]?></li>
				<li>Nama Panggilan : <?= $ar["napil"]?></li>
				<li>NIP : <?= $ar["nip"]?></li>
				<li>Jenis Kelamin : <?= $ar["jk"]?></li><br><br>
			<?php } ?>
			<?php if ($kategori==3) { ?>
				<li>Gambar : <img src="img/<?= $ar["gambar"]?>" width="100"></li>
				<li>Nama UKM : <?= $ar["nama"]?></li>
				<li>Visi : <?= $ar["visi"]?></li>
				<li>Misi : <?= $ar["misi"]?></li>
				<li>Nama Ketua : <?= $ar["ketua"]?></li><br><br>
			<?php } ?>
			<?php if ($kategori==4) { ?>
				<li>Logo : <img src="img/<?= $ar["gambar"]?>" width="100"></li>
				<li>Nama Bahasa : <?= $ar["nama"]?></li>
				<li>Tahun Tercipta : <?= $ar["tahun"]?></li>
				<li>Tingkat Bahasa : <?= $ar["tingkat"]?></li>
				<li>Nama Penemu : <?= $ar["penemu"]?></li><br><br>
			<?php } ?>
			<?php if($kategori==5) { ?>
				<li>Nama jurusan : <?= $ar["nama"]?></li>
				<li>Tahun Berdiri : <?= $ar["tahun"]?></li>
				<li>Nama Kajur : <?= $ar["kajur"]?></li>
				<li>Nama Sekjur : <?= $ar["sekjur"]?></li>
				<li>Akreditas : <?= $ar["akre"]?></li><br><br>
			<?php } ?>
		<?php } ?>
	</ul>
</body>
</html>