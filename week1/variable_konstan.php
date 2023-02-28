<?php 
//definisikan variable konstanta
define ('PHI', 3.14);

//soal 1 hitung luas lingkaran dengan jari2
//soal 2 hitung kelilingnya

//definisikan nilai jari2
$jari = 8;

//hitung nilai luas
$luas = PHI * $jari * $jari;

//hitung nilai keliling
$kll = 2 * PHI * $jari;

echo 'Luas lingkaran dengan jari jari ' .$jari. ' = ' .$luas;
echo '<br/> Kelilingnya : ' .$kll;
?>