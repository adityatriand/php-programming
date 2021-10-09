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

?>