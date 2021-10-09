<?php
require 'functions.php';
$id=$_GET["id"];
if(hapus($id)>0){
	echo "<script> alert('Data Berhasil Di Hapus');
	location.href='index.php';</script>";
}
else{
	echo"<script>alert('Data Gagal Di Hapus'); 
	windows.history.go(-1);</script>";
	}
?>