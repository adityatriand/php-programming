<?php
	
	echo "<title> Tugas Pertemuan 2 </title>";
	
	echo "<h4> Contoh Variabel dalam PHP </h4>";
	$nama = "Aditya Tri Ananda";
	$NIM = "09021181924019";
	$umur = 19;
	$tinggibadan = 166.5;
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Nama Variabel</td>
				<td>Tipe Variabel</td>
				<td>Nilai Variabel</td>
			</tr>
			<tr>
				<td>1</td>
				<td>\$nama</td>
				<td>String</td>
				<td>$nama</td>
			</tr>
			<tr>
				<td>2</td>
				<td>\$NIM</td>
				<td>String</td>
				<td>$NIM</td>
			</tr>
			<tr>
				<td>3</td>
				<td>\$umur</td>
				<td>int</td>
				<td>$umur</td>
			</tr>
			<tr>
				<td>4</td>
				<td>\$tinggibadan</td>
				<td>Float/Double</td>
				<td>$tinggibadan</td>
			</tr>
		</table>";

	echo "<h4> Contoh Konstanta dalam PHP </h4>";
	define("phi", 3.14);
	define("percepatangravitasi", 9.8);
	define("umurbudi", 20);
	define("coba", "Oke");
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Nama Variabel Konstanta</td>
				<td>Tipe Variabel Konstanta</td>
				<td>Nilai Variabel Konstanta</td>
			</tr>
			<tr>
				<td>1</td>
				<td>phi</td>
				<td>Float/Double</td>
				<td>"; echo phi; echo "</td>
			</tr>
			<tr>
				<td>2</td>
				<td>percepatangravitasi</td>
				<td>Float/Double</td>
				<td>"; echo percepatangravitasi; echo "</td>
			</tr>
			<tr>
				<td>3</td>
				<td>umurbudi</td>
				<td>int</td>
				<td>"; echo umurbudi; echo "</td>
			</tr>
			<tr>
				<td>4</td>
				<td>coba</td>
				<td>String</td>
				<td>"; echo coba; echo "</td>
			</tr>
		</table>";

	echo "<h4> Contoh Operator dalam PHP </h4>";
	echo "Operator Aritmatika <br><br>";
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Operator</td>
				<td>Nama Operator</td>
				<td>Penjelasan</td>
			</tr>
			<tr>
				<td>1</td>
				<td>x+y</td>
				<td>Pertambahan</td>
				<td>Menjumlahkan variabel x dan variabel y</td>
			</tr>
			<tr>
				<td>2</td>
				<td>x-y</td>
				<td>Pengurangan</td>
				<td>Mengurangkan variabel x dengan variabel y</td>
			</tr>
			<tr>
				<td>3</td>
				<td>x*y</td>
				<td>Perkalian</td>
				<td>Mengalikan variabel x dengan variabel y</td>
			</tr>
			<tr>
				<td>4</td>
				<td>x/y</td>
				<td>Pembagian</td>
				<td>Membagi variabel x dengan variabel y</td>
			</tr>
			<tr>
				<td>5</td>
				<td>x%y</td>
				<td>Modulus</td>
				<td>Sisa hasil bagi varaibel x oleh variabel y</td>
			</tr>
		</table> <br><br>";

	$angka1=12;
	$angka2=6;
	$tambah= $angka1 + $angka2;
	$kurang = $angka1 - $angka2;
	$kali = $angka1 * $angka2;
	$bagi = $angka1 / $angka2;
	$modulus = $angka1 % $angka2;
	echo "Pertambahan : "."$angka1 + $angka2 = $tambah <br>";
	echo "Pengurangan : "."$angka1 - $angka2 = $kurang <br>";
	echo "Perkalian : "."$angka1 * $angka2 = $kali <br>";
	echo "Pembagian : "."$angka1 / $angka2 = $bagi <br>";
	echo "Modulus : "."$angka1 % $angka2 = $modulus <br>";

	echo "<br><br> Operator Assignment <br><br>";
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Operator</td>
				<td>Nama Operator</td>
				<td>Penjelasan</td>
			</tr>
			<tr>
				<td>1</td>
				<td>x = y</td>
				<td> Penugasan </td>
				<td>Variabel y akan memberikan nilainya pada variabel x</td>
			</tr>
			<tr>
				<td>2</td>
				<td>x += y</td>
				<td>Penggabungan Tambah</td>
				<td>Notasi tersebut sama dengan x = x + y </td>
			</tr>
			<tr>
				<td>3</td>
				<td>x -= y</td>
				<td>Penggabungan Kurang</td>
				<td>Notasi tersebut sama dengan x = x - y </td>
			</tr>
			<tr>
				<td>4</td>
				<td>x*=y</td>
				<td>Penggabungan Kali</td>
				<td>Notasi tersebut sama dengan x = x * y </td>
			</tr>
			<tr>
				<td>5</td>
				<td>x /= y</td>
				<td>Penggabungan Bagi</td>
				<td>Notasi tersebut sama dengan x = x / y </td>
			</tr>
			<tr>
				<td>6</td>
				<td>x %= y</td>
				<td>Penggabungan Modulus</td>
				<td>Notasi tersebut sama dengan x = x % y </td>
			</tr>
			<tr>
				<td>7</td>
				<td>x .= y</td>
				<td>Penggabungan Kalimat</td>
				<td>Notasi tersebut sama dengan x = x . y </td>
			</tr>
		</table> <br><br>";

	$angka3 = 50;
	$angka4 = 5;
	echo "Penggabungan Tambah : "."$angka3 += $angka4 = ".$angka3 += $angka4;
	echo "<br>";
	echo "Penggabungan Kurang : "."$angka3 -= $angka4 = ".$angka3 -= $angka4;
	echo "<br>";
	echo "Penggabungan Kali : "."$angka3 *= $angka4 = ".$angka3 *= $angka4;
	echo "<br>";
	echo "Penggabungan Bagi : "."$angka3 /= $angka4 = ".$angka3 /= $angka4;
	echo "<br>";

	echo "<br><br> Operator Increment / Decrement <br><br>";
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Operator</td>
				<td>Nama Operator</td>
				<td>Penjelasan</td>
			</tr>
			<tr>
				<td>1</td>
				<td>x++</td>
				<td>Post-Increment</td>
				<td>Kembali ke x , kemudian menambahkan x sebanyak satu</td>
			</tr>
			<tr>
				<td>2</td>
				<td>++x</td>
				<td>Pre-Increment</td>
				<td>Menambahkan x sebanyak satu, kemudian kembali ke x</td>
			</tr>
			<tr>
				<td>3</td>
				<td>x--</td>
				<td>Post-Decrement</td>
				<td>Kembali ke x, kemudian mengurangkan x sebanyak satu</td>
			</tr>
			<tr>
				<td>4</td>
				<td>--x</td>
				<td>Pre-Decrement</td>
				<td>Mengurangkan x sebanyak satu, kemudian kembali ke x</td>
			</tr>
		</table> <br><br>";

	$angka5 = 15;
	echo "Angka saat ini : $angka5 <br>";
	echo "Pre-Increment : ".++$angka5;
	echo "<br>Angka saat ini : $angka5 <br>";
	echo "Post-Increment : ".$angka5++;
	echo "<br> Angka saat ini : $angka5 <br>";

	echo "<br><br> Operator Perbandingan <br><br>";
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Operator</td>
				<td>Nama Operator</td>
				<td>Penjelasan</td>
			</tr>
			<tr>
				<td>1</td>
				<td>x == y</td>
				<td> Sama Dengan </td>
				<td>Bernilai benar jika x = y tanpa memperhatikan tipe data</td>
			</tr>
			<tr>
				<td>2</td>
				<td>x === y</td>
				<td>Identik</td>
				<td>Bernilai benar jika x = y dengan memperhatikan tipe data  </td>
			</tr>
			<tr>
				<td>3</td>
				<td>x != y atau x <> y</td>
				<td>Tidak Sama Dengan </td>
				<td>Bernilai benar jika x tidak sama dengan y tanpa memperhatikan tipe data </td>
			</tr>
			<tr>
				<td>4</td>
				<td>x!==y</td>
				<td>Tidak Identik</td>
				<td>Bernilai benar jika x tidak sama dengan y dengan memperhatikan tipe data  </td>
			</tr>
			<tr>
				<td>5</td>
				<td>x > y</td>
				<td>Lebih Besar Dari</td>
				<td>Bernilai benar jika x lebih besar dari y </td>
			</tr>
			<tr>
				<td>6</td>
				<td>x < y</td>
				<td>Lebih Kecil Dari</td>
				<td>Bernilai benar jika x lebih kecil dari y </td>
			</tr>
			<tr>
				<td>7</td>
				<td>x >= y</td>
				<td>Lebih Besar Sama dengan dari</td>
				<td>Bernilai benar jika x lebih besar sama dengan dari y </td>
			</tr>
			<tr>
				<td>8</td>
				<td>x <= y</td>
				<td>Lebih Kecil Sama Dengan Dari</td>
				<td>Bernilai benar jika x lebih kecil sama dengan dari y </td>
			</tr>
		</table> <br><br>";

	$angka6 = "10";
	$angka7 = 10;
	echo '$angka6 = "10" dan $angka7 = 10';
	echo '<br>$angka6 == $angka7 : '; var_dump($angka6==$angka7);
	echo '<br>$angka6 === $angka7 : '; var_dump($angka6===$angka7);
	echo '<br>$angka6 != $angka7 : '; var_dump($angka6!=$angka7);
	echo '<br>$angka6 !== $angka7 : '; var_dump($angka6!==$angka7);

	echo "<br><br> Operator Logika <br><br>";
	echo "<table border='1' style='text-align:center;'>
			<tr style = 'background-color:yellow;'>
				<td>No</td>
				<td>Operator</td>
				<td>Nama Operator</td>
				<td>Penjelasan</td>
			</tr>
			<tr>
				<td>1</td>
				<td>x && y atau x and y</td>
				<td> And </td>
				<td>Bernilai benar jika kedua variabel benar</td>
			</tr>
			<tr>
				<td>2</td>
				<td>x || y atau x or y</td>
				<td>Or</td>
				<td>Bernilai benar jika salah satu variabel benar </td>
			</tr>
			<tr>
				<td>3</td>
				<td>!x</td>
				<td>Not</td>
				<td>Nilai !x akan berkebalikan dengan nilai x</td>
			</tr>
		</table> <br><br>";

	$cek = true;
	$cek2 = false;
	echo '$cek = true dan $cek2 = false';
	echo '<br>$cek && $cek2 : '; var_dump($cek&&$cek2);
	echo '<br>$cek || $cek2 : '; var_dump($cek||$cek2); 


?>