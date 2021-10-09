<a href="perulangan pilih halaman.php?depan=0">0</a>
<a href="perulangan pilih halaman.php?depan=1">1</a>
<a href="perulangan pilih halaman.php?depan=2">2</a>
<a href="perulangan pilih halaman.php?depan=3">3</a>
<a href="perulangan pilih halaman.php?depan=4">4</a>
<a href="perulangan pilih halaman.php?depan=5">5</a><br><br>
<?php
	$depan = $_GET['depan'];
	for($i=0;$i<=9;$i++)
	{
		echo (($depan*10)+$i)."<br>";
	}
?>