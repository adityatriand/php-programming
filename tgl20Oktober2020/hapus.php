<?php  
require 'function.php';
$id=$_GET['id'];
if (hapus($id)>0) {
	echo "<script> alert('Data Berhasil Dihapus');
	location.href='index.php';</script>";
}
else{
	echo "<script> alert('Data Gagal Dihapus');
	windows.history.go(-1);</script>";
}

?>