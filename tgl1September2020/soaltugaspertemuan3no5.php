<?php
	
	echo "<br><h3>INI MENGGUNAKAN FUNCTION DATE</h3>";

	setlocale(LC_ALL,'ID');
	date_default_timezone_set('Asia/Jakarta');
	echo 'Waktu Saat Ini: ' .strftime("%A, %d %B %Y || Pukul :"). date('H:i:s');

	echo "<br><h3>INI MENGGUNAKAN FUNCTION STRING</h3>";
	$coba = "Saya sedang mengerjakan tugas pemprograman pweb II";
	echo "String asli = $coba <br>";
	echo "strtolower = ".strtolower($coba)."<br>";
	echo "strtoupper = ".strtoupper($coba)."<br>";
	echo "strrev &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".strrev($coba)."<br>";
	echo "ucfirst &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".ucfirst($coba)."<br>";
	echo "ucwords &nbsp&nbsp&nbsp= ".ucwords($coba)."<br>";
	echo "strreplace &nbsp= ".str_replace("sedang", "sudah", $coba)."<br>";
	echo "substr &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".substr($coba, 12,17)."<br>";
	echo "strlen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".strlen($coba);

	echo "<br><h3>INI MENGGUNAKAN FUNCTION MATH</h3>";
	echo "<b>ini untuk sudut</b><br><br>";
	$sudut = 45;
	echo "SIN $sudut = ".sin(deg2rad($sudut))."<br>";
	echo "COS $sudut = ".cos(deg2rad($sudut))."<br>";
	echo "TAN $sudut = ".tan(deg2rad($sudut))."<br>";

	echo "<br><b>ini untuk pangkat dan akar</b><br><br>";
	$angka = 4;
	$angka2 = 2;
	echo "$angka pangat $angka2 = ".pow($angka2, $angka)."<br>";
	echo "akar $angka2 dari $angka = ".sqrt($angka)."<br>";

	echo "<br><b>ini untuk logaritma</b><br><br>";
	$angka3 = 100;
	echo "10log($angka3) = ".log10(100);
?>