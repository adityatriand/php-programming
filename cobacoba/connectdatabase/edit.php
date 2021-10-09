<?php 
	require 'functions.php';
  //ambil data di url
  $id = $_GET["id"];

  //query mahasiswa berdasarkan id
  $mhs=query("SELECT * FROM tb_mahasiswa WHERE id=$id")[0];
  //var_dump($mhs);
  //memisahkan tanggal lahir
  $tgl_lahir=explode("-",$mhs["tgl_lahir"]);
  //memisahkan minat
  $minat=explode(", ",$mhs["minat"]);
  //print_r($minat);

	if(isset($_POST["submit"])){
		
		//cek apakah data berhasil ditambahkan atau tidak	
		if( edit($_POST) > 0){
			echo "<script> alert('Data Berhasil Di Edit');
			location.href='index.php';</script>";
		}else{
			echo"<script>alert('Data Gagal Di Edit'); 
			windows.history.go(-1);</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<form method="post" action="">
	<table border="1" align="center">
    <tr>
      <td colspan="3">EDIT DATA MAHASISWA</td>
    </tr>
    <tr>
      <td>Id Mahasiswa</td>
      <td>:</td>
      <td>
      	<input name="id" type="text" id="id" value="<?= $mhs["id"] ?>">
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>
      	<input name="nama" type="text" id="nama" value="<?= $mhs["nama"] ?>">
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
      	<textarea name="alamat" id="alamat" cols="30" rows="4"><?= $mhs["alamat"] ?></textarea>
  	  </td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
      	<input type="radio" name="jk" id="radio" value="Pria" <?php if($mhs["gender"]=="Pria"){ echo "checked=checked";} ?>>Pria 
        <input type="radio" name="jk" id="radio" value="Wanita" <?php if($mhs["gender"]=="Wanita"){ echo "checked=checked";} ?>>Wanita
      </td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td>
        <select name="tgl" id="tgl">
          <?php	for($tgl=1;$tgl<=31;$tgl++){ ?>
				    <option value="<?= $tgl ?>" <?php if($tgl_lahir[2]==$tgl){echo "selected=selected";}?>><?= $tgl ?></option>";
			     <?php } ?>
        </select>
      <select name="bln" id="bln">
          <?php for($bln=1;$bln<=12;$bln++){ ?>
            <option value="<?= $bln ?>" <?php if($tgl_lahir[1]==$bln){echo "selected=selected";}?>><?= $bln ?></option>";
           <?php } ?>
      </select>
      <input name="thn" type="text" id="thn" size="10" maxlength="4" value="<?= $tgl_lahir[0]?>"></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td>:</td>
      <td>
        <select name="jurusan">
          <option value="Teknik Informatika" <?php if($mhs["jurusan"]=="Teknik Informatika"){echo "selected=selected";} ?>>Teknik Informatika</option>
          <option value="Sistem Informasi" <?php if($mhs["jurusan"]=="Sistem Informasi"){echo "selected=selected";} ?>>Sistem Informasi</option>
          <option value="Manajemen Informatika" <?php if($mhs["jurusan"]=="Manajemen Informatika"){echo "selected=selected";} ?>>Manajemen Informatika</option>
        </select>
    </td>
    </tr>
    <tr>
      <td>Minat</td>
      <td>:</td>
      <td>
      	<input name="minat[]" type="checkbox" id="minat[]" value="Programming" <?php if(in_array('Programming',$minat)){ echo "checked=checked";} ?> >Programming<br>
      	<input name="minat[]" type="checkbox" id="minat[]" value="Desain" <?php if(in_array('Desain',$minat)){ echo "checked=checked";} ?>>Desain<br>
        <input name="minat[]" type="checkbox" id="minat[]" value="OlahRaga" <?php if(in_array('OlahRaga',$minat)){ echo "checked=checked";} ?>>OlahRaga<br>
    </tr>
    <tr>
      <td colspan="3">
      	<button type="submit" name="submit">Edit</button>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
