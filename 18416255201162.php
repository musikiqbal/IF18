<?php
$nim = "18416255201162";
$nama = 'IQBAL ALFIAN';
echo "NIM  : " . $nim . "<br>";
echo "Nama : " . $nama . "<br>";
echo "<br>";

echo " Bilangan Ganjil 1 sampai 20 :" . "<br>";


for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 1) {
        echo $i . "-";
    }
}
echo "<br>";
echo "<br>";
echo " Bilangan Genap 1 sampai 20 :" . "<br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "-";
    }
}
