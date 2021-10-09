<?php

	function pangkat($angka,$pangkat)
	{
		if($pangkat == 0)
		{
			return 1;
		}

		return $angka * pangkat($angka,$pangkat-1);

	}

	function pangkat2($angka,$pangkat)
	{
		$hasil = 1;
		for ($i=$pangkat; $i > 0 ; $i--) 
		{
			$hasil*=$angka;
		}
		return $hasil;
	}

	$angka = 5;
	$pangkat = 3;
	echo "<br><h3>INI MENGGUNAKAN FUNCTION PANGKAT CARA PERTAMA (REKURSIF)</h3>";
	echo "$angka pangkat $pangkat  = ".pangkat($angka,$pangkat);

	echo "<br><br><h3>INI MENGGUNAKAN FUNCTION PANGKAT CARA KEDUA (PERULANGAN)</h3>";
	echo "$angka pangkat $pangkat  = ".pangkat2($angka,$pangkat);

?>