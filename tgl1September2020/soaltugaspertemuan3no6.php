<?php

	function tambah($a,$b)
	{
		$hasil = $a + $b;
		return $hasil;
	}

	function kurang($a,$b)
	{
		$hasil = $a - $b;
		return $hasil;
	}

	function kali($a,$b)
	{
		$hasil = $a * $b;
		return $hasil;
	}

	function bagi($a,$b)
	{
		$hasil = $a/$b;
		return $hasil;
	}

	function tampil($a)
	{
		echo "Ini adalah hasilnya : $a ";
	}

	$angka = 100;
	$angka2 = 4;
	echo"<br>Berapa hasil dari $angka + $angka2 ? <br> ";
	echo tampil(tambah($angka,$angka2));
	echo"<br><br>Berapa hasil dari $angka - $angka2 ? <br> ";
	echo tampil(kurang($angka,$angka2));
	echo"<br><br>Berapa hasil dari $angka * $angka2 ? <br> ";
	echo tampil(kali($angka,$angka2));
	echo"<br><br>Berapa hasil dari $angka / $angka2 ? <br> ";
	echo tampil(bagi($angka,$angka2));

?>