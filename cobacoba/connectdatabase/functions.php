<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","db_mahasiswa") or die("Koneksi ke db Gagal");

function query($query){
	global $koneksi;
	$hasil=mysqli_query($koneksi,$query);
	$rows=[];
	while($row = mysqli_fetch_assoc($hasil)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $koneksi;

	//ambil data dari tiap elemen
		$id=htmlspecialchars($data["id"]);
		$nama=htmlspecialchars($data["nama"]);
		$alamat=htmlspecialchars($data["alamat"]);
		$jk=htmlspecialchars($data["jk"]);
		$tgl=htmlspecialchars($data["tgl"]);
		$bln=htmlspecialchars($data["bln"]);
		$thn=htmlspecialchars($data["thn"]);
		$jurusan=htmlspecialchars($data["jurusan"]);
		//penggabungan variable tanggal
		$tanggal=$thn."-".$bln."-".$tgl;
		//Minat dengan array
		$minat_array=$data['minat'];
		$minat=implode(", ",$minat_array);

		//query insert
		$tambah="INSERT INTO tb_mahasiswa(id,nama,alamat,gender,tgl_lahir,jurusan,minat) 	VALUES('$id','$nama','$alamat','$jk','$tanggal','$jurusan','$minat')";	
		mysqli_query($koneksi,$tambah);

		return mysqli_affected_rows($koneksi);	

}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi,"DELETE FROM tb_mahasiswa where id=$id");
	return mysqli_affected_rows($koneksi);
}

function edit($data){
global $koneksi;

	//ambil data dari tiap elemen
		$id=htmlspecialchars($data["id"]);
		$nama=htmlspecialchars($data["nama"]);
		$alamat=htmlspecialchars($data["alamat"]);
		$jk=htmlspecialchars($data["jk"]);
		$tgl=htmlspecialchars($data["tgl"]);
		$bln=htmlspecialchars($data["bln"]);
		$thn=htmlspecialchars($data["thn"]);
		$jurusan=htmlspecialchars($data["jurusan"]);
		//penggabungan variable tanggal
		$tanggal=$thn."-".$bln."-".$tgl;
		//Minat dengan array
		$minat_array=$data['minat'];
		$minat=implode(", ",$minat_array);

		//query insert
		$update="UPDATE tb_mahasiswa SET nama='$nama',alamat='$alamat',gender='$jk',tgl_lahir='$tanggal',jurusan='$jurusan',minat='$minat' WHERE id='$id'";
		$query=mysqli_query($koneksi,$update);

		return mysqli_affected_rows($koneksi);	
}

function cari($cari){
	$query="SELECT * FROM tb_mahasiswa where nama LIKE '%$cari%' OR jurusan LIKE '%$cari%' ";
	return query($query);
}
?>
