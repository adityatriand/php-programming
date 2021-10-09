<?php
$angka=[[1,2,3],[4,5,6],[7,8,9]];
//echo $angka[2][1];
//mencetak array multidimensi

foreach ($angka as $a) {
	foreach ($a as $b) {
		echo $b;
	}
	echo "<br>";
}

?>