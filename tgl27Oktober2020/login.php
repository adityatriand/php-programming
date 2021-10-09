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
	<title>Form Login Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre&family=Staatliches&display=swap" rel="stylesheet">
	<link rel="icon" href="Logo 1080.jpg">
</head>
<body class="middle bg-1">
	<?php
	if(!empty($_GET['action'])){
		confirmLogin($_GET['action']);
	}

	if($_POST){
	 $pesan ="";
	 foreach($query as $user) {
		if($_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])){
			$_SESSION['login'] = true;
			$name = $_POST['username'];
			$_SESSION['name'] = $name;
			header("Location: index.php?action=zlawt16xaf");
		}
		else{
			$pesan = "Password dan/atau Username anda salah";
		}
	 }
	 echo "<div class='Message FailMessage font-DavidLibre'>$pesan</div>";
	}
	?>		
	<!-- tempat input login -->
	<form action="login.php" method="POST" class="formLogin">
		<img src="Logo 1080.jpg">
		<div class="header">
			<h3 class="font-Staatliches">Selamat Datang</h3>
			<p class="font-DavidLibre">Silahkan Login Terlebih Dahulu</p>
		</div>
		<div class="body">
			<input type="text" name="username" id="username" class="input user-input" placeholder="Username Anda" required>
			<br>
			<input type="password" name="password" id="password"  class="input pass-input" placeholder="Password Anda" required>
			<input type="button" onclick="show()" class="btn btn2 font-Staatliches" value="Show">
			<input type="button" onclick="hide()" class="btn btn2 font-Staatliches" value="Hide">
			<br>
			<input type="submit" value="Login" class="btn btn1 font-Staatliches">
		</div>
		<div class="footer">
			<div class="link1"> <a href="ubah.php" class="font-DavidLibre">Lupa Password ?</a> || <a href="buat.php" class="font-DavidLibre">Buat Akun</a></div>
			<div class="cipta font-DavidLibre">&copy; <script>document.write(new Date().getFullYear());</script> || Hak Cipta Dilindungi UU</div>
		</div>
	</form>
	<script type="text/javascript">
		function show() {
	        var x = document.getElementById("password");
	        x.type = "text";
    	}
    	function hide(){
    		var x = document.getElementById("password");
    		x.type = "password";
    	}
	</script>
</body>
</html>