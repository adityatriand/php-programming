<!DOCTYPE html>
<html>
<head>
	<title>Pengkonidisian</title>
</head>
<body>
	<form action="getselection.php" method="GET">
		<label for="nama">Nama anda : </label>
		<input type="text" id="nama" name="nama">
		<br><br>
		<label for="nilai">Nilai PWEB anda : </label>
		<input type="number" id="nilai" name="nilai" min="0">
		<br><br>
		<input type="submit" name="submit">
		<input type="reset" name="reset">
	</form>
</body>
</html>