<?php
$bilangan = array();
for ($i = 1; $i <= 100; $i++) {
    echo $bilangan[$i] = rand(1, 10); //menambahkan bilangan acak ke array
    echo "<br>";
}

$max = $bilangan[1];

for ($i = 2; $i <= 100; $i++) {  
    if ($bilangan[$i] > $max) {
        $max = $bilangan[$i];
    }
}

echo "Bilangan terbesar adalah: " . $max;
?> 