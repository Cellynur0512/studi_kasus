<?php
$bilangan = array(); //inisialisasi array untuk menampung bilangan
$satu = 3;
$dua = 9;
$tiga = 6;
for ($i = 1; $i <= 98; $i++) {
    echo $bilangan[$i] = 5; //menambahkan bilangan acak ke array
    echo "<br>";
}
    echo $satu;
    echo "<br>";
    echo $dua;
    echo "<br>";
    echo $tiga;
    echo "<br>";

$max = $bilangan[1]; //inisialisasi variabel max dengan bilangan pertama

//melakukan iterasi pada array dan memperbarui variabel max jika ada bilangan yang lebih besar
if ($bilangan[1] > $satu && $bilangan[1] > $dua && $bilangan[1] > $tiga) {
    echo "Bilangan terbesar adalah: " . $bilangan[1];
} else if ($satu > $bilangan[1] && $satu > $dua && $satu > $tiga) {
    echo "Bilangan terbesar adalah: " . $satu;
} else if ($dua > $bilangan[1] && $dua > $satu && $dua > $tiga) {
     echo "Bilangan terbesar adalah: " . $dua;
} else if ($tiga > $bilangan[1] && $tiga > $satu && $tiga > $dua) {
     echo "Bilangan terbesar adalah: " . $tiga;
 } 
?> 