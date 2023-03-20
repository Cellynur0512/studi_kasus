<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>Cek panjang segitiga</center>
<form action="#" method="post">
Bilangan Pertama : <input type="number" name="a" Placeholder="Masukan bilangan ke-1"><br><br/>

Bilangan Kedua : <input type="number" name="b" Placeholder="Masukan bilangan ke-2"><br><br/>

Bilangan Ketiga : <input type="number" name="c" Placeholder="Masukan bilangan ke-3"><br><br/>
<input type="submit" Value="CEK"><br><br/>
</form>

<?php
if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

// Cari nilai terkecil
$min = $a;
if ($b < $min) {
  $min = $b;
}
if ($c < $min) {
  $min = $c;
}

// Cari nilai terbesar
$max = $a;
if ($b > $max) {
  $max = $b;
}
if ($c > $max) {
  $max = $c;
}

// Cari nilai tengah
$mid = $a + $b + $c - $min - $max;

// Cetak ketiga bilangan secara berurutan mulai dari nilai terkecil sampai dengan nilai terbesar
echo $min . " " . $mid . " " . $max;
?>