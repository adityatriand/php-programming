<?php 

$conn = mysqli_connect("localhost","root","","db_perpustakaan") or die ("Koneksi ke Database Gagal");

function query($query){
	global $conn;
	$sql = mysqli_query($conn,$query) or die ("Database tidak ada");
	$rows = [];
	while ($row = mysqli_fetch_assoc($sql)) {
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$id = htmlspecialchars($data['id']);
	$judul = htmlspecialchars($data['judul']);
	$penulis = htmlspecialchars($data['penulis']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$resensi = htmlspecialchars($data['resensi']);	
	if(!empty($data["kategori"])){
		$kategori_array=$data["kategori"];
		$kategori=implode(", ", $kategori_array);
	}
	else{
		$kategori = "";
	}
	$add = "INSERT INTO tb_buku (Id_buku, Judul_buku, Penulis, Penerbit, Kategori, Jumlah_hal, Resensi) VALUES ('$id','$judul','$penulis','$penerbit','$kategori',$jumlah,'$resensi')";
	mysqli_query($conn,$add);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	$delete = "DELETE FROM tb_buku WHERE Id_buku = '$id'";
	mysqli_query($conn,$delete);
	return mysqli_affected_rows($conn);
}

function edit($data){
	global $conn;
	$id = htmlspecialchars($data['id']);
	$judul = htmlspecialchars($data['judul']);
	$penulis = htmlspecialchars($data['penulis']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$resensi = htmlspecialchars($data['resensi']);
	if(!empty($data["kategori"])){
		$kategori_array=$data["kategori"];
		$kategori=implode(", ", $kategori_array);
	}
	else{
		$kategori = "";
	}
	$update="UPDATE tb_buku SET Id_buku='$id',Judul_buku='$judul',Penulis='$penulis',Penerbit='$penerbit',Kategori='$kategori',Jumlah_hal=$jumlah,Resensi='$resensi' WHERE Id_buku='$id'";
	mysqli_query($conn,$update);
	return mysqli_affected_rows($conn);
}

function cari($cari){
	$query="SELECT * FROM tb_buku WHERE Judul_buku like '%$cari%' OR Penerbit like '%$cari%' OR Kategori like '%$cari%' OR Jumlah_hal like '%$cari%'";
	return query($query);
}

function updatePass($data){
	global $conn;
	$username=mysqli_real_escape_string($conn, $_POST["username"]);
	$pass=mysqli_real_escape_string($conn, $_POST["password"]);
	$password = password_hash($pass, PASSWORD_DEFAULT);
	$update = "UPDATE tb_login SET password='$password' WHERE username='$username'";
	mysqli_query($conn,$update);
	return mysqli_affected_rows($conn);
}

function buatAkun($data){
	global $conn;
	$username=mysqli_real_escape_string($conn, $_POST["username"]);
	$pass=mysqli_real_escape_string($conn, $_POST["password"]);
	$password = password_hash($pass, PASSWORD_DEFAULT);
	$make = "INSERT INTO tb_login (username, password) VALUES ('$username','$password')";
	mysqli_query($conn,$make);
	return mysqli_affected_rows($conn);
}

function hapusAkun($username){
	global $conn;
	$delete = "DELETE FROM tb_login WHERE username = '$username'";
	mysqli_query($conn,$delete);
	return mysqli_affected_rows($conn);
}

function confirmLogin($act){
	if ($act=="btrju5q9de") {
		echo "<div class='Message AlertMessage font-DavidLibre'>Anda Harus Login Terlebih Dahulu</div>";
	}
	elseif($act=="b4x681l8z9"){
		echo "<div class='Message SuccessMessage font-DavidLibre'>Akun Berhasil Dibuat</div>";
	}
	elseif($act=="8556r5l4lo"){
		echo "<div class='Message SuccessMessage font-DavidLibre'>Password Berhasil Diubah</div>";
	}
	elseif($act=="lbonzmtk7k"){
		echo "<div class='Message SuccessMessage font-DavidLibre'>Akun Berhasil Dihapus</div>";
	}
}

function confirmIndex($act){
	if ($act == "zlawt16xaf") {
		echo "<div class='Message SuccessMessage font-DavidLibre'>Anda Berhasil Login</div>";
	}
	elseif($act == "lbonzmtk7k"){
		$name = $_SESSION['name'];
		if(hapusAkun($name)>0){
			session_destroy();
			header('Location: login.php?action=lbonzmtk7k');
			exit;
		}
	}
	elseif($act=="d66ta2q88y"){
		echo "<div class='Message AlertMessage font-DavidLibre'>Anda Sudah Login. Klik logout jika mau mengulang </div>";
	}
	elseif($act=="ffezsgjw9o"){
		session_destroy();
		header("Location: login.php");
	}
	elseif($act=="3g2yjnv9px"){
		echo "<div class='Message FailMessage font-DavidLibre'>Akun Gagal Dihapus</div>";
	} 
}
?>