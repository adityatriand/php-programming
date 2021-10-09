<?php
	$banyakbil = 15;
	echo "Pengulangan untuk mencari kategori bilangan : <br><br>";
	for ($i=1; $i <= $banyakbil ; $i++) 
	{
		echo "<ul><li>"; 
		$bil = 0;
		for($j=1;$j<=$i;$j++)
		{
			if ($i%$j==0) 
			{
				$bil++;
			}
		}
		if ($i%2==0)
		{
			if ($bil==2) 
			{
				echo "Angka $i adalah bilangan genap sekaligus bilangan prima<br>";
			}
			else
			{
				echo "Angka $i adalah bilangan genap<br>";
			}
		}

		else
		{
			if ($bil==2) 
			{
				echo "Angka $i adalah bilangan ganjil sekaligus bilangan prima<br>";
			}
			else
			{
				echo "Angka $i adalah bilangan ganjil<br>";
			}
		}
		echo "</li></ul>";
			
	}
?>