<?php

	$jabatan = "Staf";
	$gajiPokok = 0;
	$pajak = 0;
	$fasilitas = "";
	switch($jabatan)
	{
		case "Direktur" : $gaji = 5000000;  
						  $pajak = 0.07*$gaji;
						  $fasilitas = "Mobil"; break;

		case "Kepala Staf" : $gaji = 3500000;  
						  	 $pajak = 0.07*$gaji;
						 	 $fasilitas = "Mobil"; break;

		case "Staf" : $gaji = 1500000;  
					  $pajak = 0.05*$gaji;
					  $fasilitas = "Handphone"; break;

		default : echo"Masukkan Anda Salah";break;
	}

	echo "<table>
			<tr>
				<td>
					Gaji Anda
				</td>
				<td>
					=
				</td>
				<td>
					$gaji
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
					echo ($gaji-$pajak);
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