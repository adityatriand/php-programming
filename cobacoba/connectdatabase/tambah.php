<?php 
	require 'functions.php';
	if(isset($_POST["submit"])){
		
		//cek apakah data berhasil ditambahkan atau tidak	
		if( tambah($_POST) > 0){
			echo "<script> alert('Data Berhasil Di Simpan');
			location.href='index.php';</script>";
		}else{
			echo"<script>alert('Data Gagal Disimpan'); 
			windows.history.go(-1);</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<form method="post" action="">
	<table border="1" align="center">
    <tr>
      <td colspan="3">TAMBAH DATA MAHASISWA</td>
    </tr>
    <tr>
      <td>Id Mahasiswa</td>
      <td>:</td>
      <td>
      	<input name="id" type="text" id="id">
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>
      	<input name="nama" type="text" id="nama">
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
      	<textarea name="alamat" id="alamat" cols="30" rows="4"></textarea>
  	  </td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
      	<input type="radio" name="jk" id="radio" value="Pria">Pria 
        <input type="radio" name="jk" id="radio" value="Wanita">Wanita
      </td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td>
         <select name="tgl" id="tgl">
          <?php
			for($tgl=1;$tgl<=31;$tgl++){
				echo"<option>$tgl</option>";
			}
		  ?>
        </select>
      <select name="bln" id="bln">
          <?php
			for($bulan=1;$bulan<=12;$bulan++){
			echo"<option>$bulan</option>";
		  }
		?>
      </select>
      <input name="thn" type="text" id="thn" size="10" maxlength="4"></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td>:</td>
      <td>
        <select name="jurusan">
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Mamajemen Informatika">Mamajemen Informatika</option>
        </select>
    </td>
    </tr>
    <tr>
      <td>Minat</td>
      <td>:</td>
      <td>
      	<input name="minat[]" type="checkbox" id="minat[]" value="Programming">Programming<br>
      	<input name="minat[]" type="checkbox" id="minat[]" value="Desain">Desain<br>
        <input name="minat[]" type="checkbox" id="minat[]" value="OlahRaga">OlahRaga<br>
    </tr>
    <tr>
      <td colspan="3">
      	<button type="submit" name="submit">Kirim</button>
      </td>
    </tr>
  </table>
</form>
</body>
</html>


  
