<?php
	
	echo "<br><h3>INI CONTOH PERULANGAN FOR</h3>";
	$banyakayam = 5;
	for ($i=$banyakayam; $i > 0; $i--) 
	{ 
		echo "Anak ayam turunlah $i, mati satu tinggal lah ".($i-1)."<br>";
	}

	echo "<br><h3>INI CONTOH PERULANGAN DO-WHILE</h3>";
	$bil = 1;
	echo "Urutan nama hari di Indonesia<br>";
	do
	{
		$namahari = "";
		if($bil==1){$namahari = "Senin";}
		elseif ($bil==2) {$namahari = "Selasa";}
		elseif ($bil==3) {$namahari = "Rabu";}
		elseif ($bil==4) {$namahari = "Kamis";}
		elseif ($bil==5) {$namahari = "Jum'at";}
		elseif ($bil==6) {$namahari = "Sabtu";}
		else{$namahari ="Ahad";}
		echo "<br>$bil".".$namahari";
		$bil++;
	}while($bil<=7);

	echo "<br><h3>INI CONTOH PERULANGAN WHILE-DO</h3>";
	$banyak = 5;
	$index = 1;
	while ( $index <= $banyak) 
	{
		if($index%2==0)
		{
			echo "**<br>";
		}
		else
		{
			echo "##<br>";
		}
		$index++;
	}

?>