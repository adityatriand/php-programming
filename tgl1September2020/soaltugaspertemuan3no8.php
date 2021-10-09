<?php

	function faktorial($a)
	{
		if($a==0 || $a==1)
		{
			return 1;
		}

		return $a * faktorial($a-1);
	}

	function faktorial2($a)
	{
		$hasil = 1;
		for ($i=$a; $i >0 ; $i--) 
		{ 
			$hasil*=$i;
		}

		return $hasil;
	}

	$angka = 5;
	echo "<br><h3>INI MENGGUNAKAN FUNCTION FAKTORIAL CARA PERTAMA (REKURSIF)</h3>";
	echo "Faktorial dari $angka = ".faktorial($angka);
	echo "<br><br><h3>INI MENGGUNAKAN FUNCTION FAKTORIAL CARA KEDUA (PERULANGAN)</h3>";
	echo "Faktorial dari $angka = ".faktorial2($angka);

?>