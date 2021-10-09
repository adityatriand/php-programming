<?php
	
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
	echo "<br>Pilihan Channel Tv = $channeltv ";
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

?>