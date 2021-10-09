<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login']==true){
		header("Location: index.php?action=d66ta2q88y");
	}
}
require 'function.php';
$get = "SELECT * FROM tb_login";
$query = query($get);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Buat Akun Login Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="middle bg-1">
	<?php
	if(!empty($_GET['action'])){
		if($_GET['action']=="rin8o9vvva"){
			header("Location: login.php?action=b4x681l8z9");
			exit;
		}
		elseif($_GET['action']=="hskd0gfpog"){
			echo "<div class='Message FailMessage font-DavidLibre' style='margin: 0 auto; margin-bottom : 30px;'>Username tidak tersedia</div>";
		}
	}  
	if($_POST){
		$cek = true;
		if($_POST["password"] != $_POST["confirm"]){
			echo "<div class='Message FailMessage font-DavidLibre' style='margin: 0 auto; margin-bottom : 30px;'>Konfirmasi Password Salah</div>";
		}
		else{
			foreach($query as $user) {
				if($_POST["username"]==$user["username"]){
					$cek = false;
				}
			}
			if($cek && buatAkun($_POST)>0){
			  	header("Location: buat.php?action=rin8o9vvva");
			}
			else{
			  header("Location: buat.php?action=hskd0gfpog");
			}
		}
	}
	?>
	<div class="header header-pass">
		<h3>Pembuatan Akun Baru</h3>
	</div>
	<table>
		<form action="buat.php" method="POST">
			<table border="1" align="center" class="tabel-akun">
				<tr>
					<td><label for="username">Masukkan Username : </label></td>
					<td><input type="text" name="username" id="username" required></td>
				</tr>
				<tr>
					<td><label for="password">Masukkan Password : </label></td>
					<td>
						<input type="password" name="password" id="password" required>
						<input type="button" onclick="show()" value="Show">
						<input type="button" onclick="hide()" value="Hide">
					</td>
				</tr>
				<tr>
					<td><label for="confirm">Masukkan Ulang Password : </label></td>
					<td>
						<input type="password" name="confirm" id="confirm" required>
						<input type="button" onclick="show2()" value="Show">
						<input type="button" onclick="hide2()" value="Hide">
					</td>
				</tr>
				<!-- <tr>
					<td><label for="captcha">
						Captcha : 
						<?php  
							// $random = rand(1,50);
							// $random2 = rand(1,50);
							// echo "$random + $random2";
						?>
					</label></td>
					<td>
						<input type="number" name="captcha" id="captcha" placeholder="isi jawaban tepat">
						<input type="button" onclick="cek($random,$random2)" value="Cek">
					</td>
				</tr>
				<tr>
					<td id="konfirmasi"></td>
				</tr> -->
			</table>
			<table align="center" cellspacing="10">
	 			<tr>
	 				<td align="center">
						<input type="reset" name="reset" value="Reset">
						<input type="submit" name="submit" value="Buat Akun" id="submit">
						<input type="button" onclick="window.location.href='login.php'" name="kembali" value="Kembali">
					</td>
				</tr>
			</table>
		</form>
	</table>
	<script type="text/javascript">
		function show() {
	        var x = document.getElementById("password");
	        x.type = "text";
		}
		function show2() {
	        var x = document.getElementById("confirm");
	        x.type = "text";
		}
		function hide(){
			var x = document.getElementById("password");
			x.type = "password";
		}
		function hide2(){
			var x = document.getElementById("confirm");
			x.type = "password";
		}
	</script>
</body>
</html>