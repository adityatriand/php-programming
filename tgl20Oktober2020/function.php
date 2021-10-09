<?php 

$conn = mysqli_connect("localhost","root","","db_buku") or die ("Koneksi ke Database Gagal");

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
	$kategori_array=$data["kategori"];
	$kategori=implode(",", $kategori_array);
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
	$kategori_array=$data["kategori"];
	$kategori=implode(", ", $kategori_array);
	$update="UPDATE tb_buku SET Id_buku='$id',Judul_buku='$judul',Penulis='$penulis',Penerbit='$penerbit',Kategori='$kategori',Jumlah_hal=$jumlah,Resensi='$resensi' WHERE Id_buku='$id'";
	mysqli_query($conn,$update);
	return mysqli_affected_rows($conn);
}

function cari($cari){
	$query="SELECT * FROM tb_buku WHERE Judul_buku like '%$cari%' OR Penerbit like '%$cari%' OR Kategori like '%$cari%' OR Jumlah_hal like '%$cari%'";
	return query($query);
}

?>