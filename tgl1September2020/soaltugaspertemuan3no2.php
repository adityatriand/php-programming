<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 1</title>
	<style>
		.kotak
		{
			text-align: center;
			width: 30px;
			padding: 10px;
			margin: 5px;
			border: 1px solid black;
		}
		.clear
		{
			display: flex;
			flex-wrap: nowrap;
		}

	</style>
</head>
<body>
<?php

	$baris = 5;
	for ($i=1; $i <=5 ; $i++)
	{ 
		echo "<div class='clear'>";
		for($j=1; $j<=$i ; $j++)
		{
			echo "<div class='kotak'>$j</div>";
		}
		echo "</div>";
	}
?>
</body>
</html>