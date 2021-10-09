<?php  
session_start();
require 'function.php';
if (!isset($_SESSION['login'])) {
	header('Location: login.php?action=btrju5q9de');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="middle bg-2">
	<?php
		if(!empty($_GET['action'])){
			confirmIndex($_GET['action']);
		}
	?>
	<img src='Logo 1080.jpg'>
	<div class='header'>
		<h3 class='font-Staatliches'>Selamat Datang</h3>
		<p class='font-DavidLibre'><?= $_SESSION['name'] ?></p>
	</div>
	<div style="text-align: center;">
		<button class="btn btn1 font-Staatliches" onclick="window.location.href='home.php'">MENU UTAMA</button>
		<br>
		<div class="link1">	
			<a href="index.php?action=ffezsgjw9o">Logout</a> || <a href="index.php?action=d66ta2q88y">Halaman Login</a>|| <a href="ubah.php">Ubah Password</a>|| <a onclick="del();">Hapus Akun</a>
		</div>
	</div>
</body>
<script type="text/javascript">
	function del(){
		var r = confirm("Yakin Ingin Menghapus ?");
		if (r == true) {
			window.location.href = "index.php?action=lbonzmtk7k" ;
		}
		else{
			window.location.href = "index.php?action=3g2yjnv9px" ;
		}
	}
</script>
</html>