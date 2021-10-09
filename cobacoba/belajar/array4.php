<?php
$teman=["Fenny","Fidyah","c"=>"Angga","d"=>"Nabila"];

//mencetak menggunakan looping for
//hanya digunakan untuk array numerik
// for ($i=0; $i <count($teman) ; $i++) { 
// 	echo "<li> $teman[$i] <br>";
// }

//looping foreach ini looping untuk array
foreach ($teman as $key=>$t) {
	echo "<li>$key. $t</li>";
}


?>