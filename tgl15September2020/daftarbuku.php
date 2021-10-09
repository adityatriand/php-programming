<?php 
$books =
[

	["nama"=>"Pemprograman PHP dan MYSQL","penerbit"=>"Elex Media", "penulis"=>"Jhon Smith", "hal"=>100,"resensi" => "Pemrograman dasar PHP dan MYSQL serta Penerapan di berbagai kasus","gambar"=>"1.jpg" ],
	["nama"=>"Pemprograman Java", "penerbit"=>"PT Remaja Rosdakarya", "penulis"=>"Yuni Sugiarti", "hal"=>257,"resensi" => "Pemrograman Java untuk pembuatan perangkat lunak berbasis desktop, console, maupun mobile","gambar"=>"2.jpg" ],
	["nama"=>"Pengantar Teknologi Informasi", "penerbit"=>"Andi Yogyakarta", "penulis"=>"Abdul Kadir", "hal"=>407,"resensi" => "Pengantar Teknologi Informasi sebagai sumber untuk memahami teknologi yang lingkupnya sangat luas","gambar"=>"3.jpg" ]

]
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
</head>
<body>
	<h3>Daftar Buku</h3>
	<ul>
		<?php foreach ($books as $book) { ?>
			<li><a href="detailbuku.php?nama=<?= $book["nama"] ?>&penerbit=<?= $book["penerbit"] ?>&penulis=<?= $book["penulis"] ?>&hal=<?= $book["hal"] ?>&resensi=<?= $book["resensi"] ?>&gambar=<?= $book["gambar"] ?>"><?= $book["nama"] ?></a></li>
		<?php } ?>
	</ul>
</body>
</html>