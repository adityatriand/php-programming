<?php

	// NO 1
	echo "<br>Contoh Variabel<br>";
	$nama = "Aditya Tri Ananda";
	$NIM = "09021181924019";
	$umur = 19;
	$tinggibadan = 166.5;
	echo "$nama<br>$NIM<br>$umur<br>$tinggibadan";
	
	echo "<br><br>Contoh Konstanta<br>";
	define("phi", 3.14);
	define("percepatangravitasi", 9.8);
	define("umurbudi", 20);
	define("coba", "Oke");
	echo phi."<br>".percepatangravitasi."<br>".umurbudi."<br>".coba;

	echo "<br><br>Contoh Operator<br><br>";
	echo "Operator Aritmatika<br>";
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
	
	echo "<br>Operator Penugasan<br>";
	echo "Penggabungan Tambah : "."$angka1 += $angka2 = ".$angka1 += $angka2;
	echo "<br>";
	echo "Penggabungan Kurang : "."$angka1 -= $angka2 = ".$angka1 -= $angka2;
	echo "<br>";
	echo "Penggabungan Kali : "."$angka1 *= $angka2 = ".$angka1 *= $angka2;
	echo "<br>";
	echo "Penggabungan Bagi : "."$angka1 /= $angka2 = ".$angka1 /= $angka2;
	echo "<br>";

	echo "<br>Operator Increment/Decrement<br>";
	$angka5 = 15;
	echo "Angka saat ini : $angka5 <br>";
	echo "Pre-Increment : ".++$angka5;
	echo "<br>Angka saat ini : $angka5 <br>";
	echo "Post-Increment : ".$angka5++;
	echo "<br> Angka saat ini : $angka5 <br>";

	echo "<br>Operator Perbandingan<br>";
	$angka6 = "10";
	$angka7 = 10;
	echo '$angka6 = "10" dan $angka7 = 10';
	echo '<br>$angka6 == $angka7 : '; var_dump($angka6==$angka7);
	echo '<br>$angka6 === $angka7 : '; var_dump($angka6===$angka7);
	echo '<br>$angka6 != $angka7 : '; var_dump($angka6!=$angka7);
	echo '<br>$angka6 !== $angka7 : '; var_dump($angka6!==$angka7);

	echo "<br><br>Operator Logika<br>";
	$cek = true;
	$cek2 = false;
	echo '$cek = true dan $cek2 = false';
	echo '<br>$cek && $cek2 : '; var_dump($cek&&$cek2);
	echo '<br>$cek || $cek2 : '; var_dump($cek||$cek2); 

	//NO 2
		echo "<h3>Ini Memakai Script If Else</h3>";
	$nilai = 90;
	echo "Masukkan nilai anda = $nilai ";
	if($nilai>=86)
	{
		echo "<br>Nilai Anda A";
	}

	elseif($nilai>=71 && $nilai<86)
	{
		echo "<br>Nilai Anda B";
	}

	elseif($nilai>=56 && $nilai<71)
	{
		echo "<br>Nilai Anda C";
	}

	elseif($nilai>=31 && $nilai<56)
	{
		echo "<br>Nilai Anda D";
	}

	else
	{
		echo "<br>Nilai Anda E";
	}

	echo "<h3>Ini Memakai Script Switch</h3>";
	$channeltv = 9;
	echo "Pilihan Channel Tv = $channeltv ";
	switch($channeltv){
        case 1:echo "<br>Anda Sedang Menonton Trans7";break;
        case 2:echo "<br>Anda Sedang Menonton RCTI";break;
        case 3:echo "<br>Anda Sedang Menonton ANTV";break;
        case 4:echo "<br>Anda Sedang Menonton INDOSIAR";break;
        case 5:echo "<br>Anda Sedang Menonton TransTV";break;
        case 6:echo "<br>Anda Sedang Menonton TVONE";break;
        case 7:echo "<br>Anda Sedang Menonton SCTV";break;
        case 8:echo "<br>Anda Sedang Menonton MetroTV";break;
        case 9:echo "<br>Anda Sedang Menonton GlobalTV";break;
        case 10:echo "<br>Anda Sedang Menonton MNCTV";break;
        case 11:echo "<br>Anda Sedang Menonton TVRI";break;
        case 12:echo "<br>Anda Sedang Menonton NETTV";break;
        case 13:echo "<br>Anda Sedang Menonton PALTV";break;
        case 14:echo "<br>Anda Sedang Menonton SRIWIJAYATV";break;
        case 15:echo "<br>Anda Sedang Menonton INEWSTV";break;
        default:echo "<br>Pilihan Kosong";break;
    }

    //NO 3
    echo "<br><br><table border='1'>";
	echo "<tr><td>";
	$angka3 = 10;
	echo "Aku adalah angka $angka3";
	echo "<br>Jika aku dikali 8, jumlahku sekarang ".$angka3*=8;
	echo "<br>Jika aku dibagi 4, jumlahku sekarang ".$angka3/=4;
	echo "<br>Jika aku dikurang 6, jumlahku sekarang ".$angka3-=6;
	echo "<br>Jika aku ditambah 2, jumlahku sekarang ".$angka3+=2;
	echo "</td></tr></table>";

	//NO 4
	$jabatan = "Direktur";
	$gajiPokok = 0;
	$pajak = 0;
	$fasilitas = "";
	switch($jabatan)
	{
		case "Direktur" : $gajiPokok = 5000000;  
						  $pajak = 0.07*$gajiPokok;
						  $fasilitas = "Mobil"; break;

		case "Kepala Staf" : $gajiPokok = 3500000;  
						  	 $pajak = 0.07*$gajiPokok;
						 	 $fasilitas = "Mobil"; break;

		case "Staf" : $gajiPokok = 1500000;  
					  $pajak = 0.05*$gajiPokok;
					  $fasilitas = "Handphone"; break;

		default : echo"Masukkan Anda Salah";break;
	}

	echo "<table>
			<tr>
				<td>
					<br><br>Gaji Anda
				</td>
				<td>
					<br><br>=
				</td>
				<td>
					<br><br>$gajiPokok
				</td>
			</tr>
			<tr>
				<td>
					Pajak Anda
				</td>
				<td>
					=
				</td>
				<td>
					&nbsp&nbsp$pajak
				</td>
			</tr>
			<tr>
				<td>
					Gaji Bersih Anda
				</td>
				<td>
					=
				</td>
				<td>";
					echo ($gajiPokok-$pajak);
				echo "</td>
			</tr>
			<tr>
				<td>
					Fasilitas Anda
				</td>
				<td>
					=
				</td>
				<td>
					$fasilitas
				</td>
			</tr>
	</table>";

?>