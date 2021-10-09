<?php
//variabel superglobal
//var_dump($_SERVER);
//echo $_SERVER["SERVER_NAME"];

//$_GET["nama"]="Budi";
//$_GET["nim"]="5656576";
//$_GET["alamat"]="Palembang";
//var_dump($_GET);

//dengan form
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get dengan Form</title>
</head>
<body>
	<form action="cari.php" method="GET">
		<label for="search">Pencarian</label>
		<input type="text" name="search" id="search">
		<button name="submit">Cari</button>
	</form>
	
</body>
</html>