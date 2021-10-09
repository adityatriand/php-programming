<?php 
session_start();
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
		if($_GET['action']=="sv6m0rts30"){
			if(isset($_SESSION['login'])){
				session_destroy();
				header("Location: login.php?action=8556r5l4lo");
				exit;
			}
			else{
				header("Location: login.php?action=8556r5l4lo");
				exit;
			}
		}
		elseif($_GET['action']=="jar5ij4gpm"){
			echo "<div class='Message FailMessage font-DavidLibre' style='margin: 0 auto; margin-bottom : 30px;'>Password Gagal Diubah</div>";
		}
	}  
	if($_POST){
		$cek = false;
		if($_POST["password"] != $_POST["confirm"]){
			echo "<div class='Message FailMessage font-DavidLibre' style='margin: 0 auto; margin-bottom : 30px;'>Konfirmasi Password Salah</div>";
		}
		else{
			foreach($query as $user) {
				if($_POST["username"]==$user["username"]){
					$cek = true;
				}
			}
			if($cek && updatePass($_POST)>0){
			  	header("Location: ubah.php?action=sv6m0rts30");
			}
			else{
			  header("Location: ubah.php?action=jar5ij4gpm");
			}
		}
		
	}
	?>
	<div class="header header-pass">
		<h3>Ubah Password</h3>
	</div>
	<table>
		<form action="ubah.php" method="POST">
			<table border="1" align="center" class="tabel-akun">
				<tr>
					<td><label for="username">Masukkan Username : </label></td>
					<?php 
					if(!empty($_SESSION['name'])) {
						$name = $_SESSION['name'];
						echo "<td><input type='text' name='username' id='username' value='$name' readonly></td>"; 
					}
					else{
						echo "<td><input type='text' name='username' id='username' required></td>";
					}
					?>
				</tr>
				<tr>
					<td><label for="password">Masukkan Password Baru : </label></td>
					<td>
						<input type="password" name="password" id="password" required>
						<input type="button" onclick="show()" value="Show">
						<input type="button" onclick="hide()" value="Hide">
					</td>
				</tr>
				<tr>
					<td><label for="confirm">Masukkan Ulang Password Baru : </label></td>
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
						<input type="submit" name="submit" value="Ubah Password" id="submit">
						<?php  
						if(!empty($_SESSION['name'])) {
							$link = 'index.php';						}
						else{
							$link = 'login.php';
						}
						?>
						<input type="button" onclick="window.location.href='<?= $link ?>'" name="kembali" value="Kembali">
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