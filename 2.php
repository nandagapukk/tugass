<?php
// Soal a dan b
$angka = 1;
while ($angka <= 16) {
    echo $angka . " ";
    $angka += 5;
}
echo "<br>";

$angka = 10;
while ($angka >= 0) {
    echo $angka . " ";
    $angka--;
}
echo "<br>";

// Soal c dan d
$angka = 30;
do {
    echo $angka . " ";
    $angka -= 3;
} while ($angka >= 0);
echo "<br>";

$angka = 10;
do {
    echo $angka . " ";
    $angka -= 2;
} while ($angka >= 0);
?>