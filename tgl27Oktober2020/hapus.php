<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('Location: login.php?action=notyet');
	exit;
}  
require 'function.php';
$id=$_GET['id'];
if (hapus($id)>0) {
	echo "<script> alert('Data Berhasil Dihapus');
	location.href='home.php';</script>";
}
else{
	echo "<script> alert('Data Gagal Dihapus');
	windows.history.go(-1);</script>";
}

?>