<?php
// Fungsi untuk memeriksa apakah bilangan prima
function cekPrima($angka) {
    if ($angka < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}

// Fungsi untuk menentukan apakah bilangan ganjil, genap, dan/atau prima
function kategoriBilangan($angka) {
    $hasil = "Angka $angka adalah bilangan ";
    
    // Cek ganjil atau genap
    if ($angka % 2 == 0) {
        $hasil .= "genap";
    } else {
        $hasil .= "ganjil";
    }
    
    // Cek prima
    if (cekPrima($angka)) {
        $hasil .= " dan sekaligus bilangan prima";
    }

    return $hasil;
}

// Menampilkan hasil untuk bilangan 1 sampai 20
echo "<h3>Pengulangan untuk mencari kategori bilangan:</h3>";
echo "<ul>";
for ($i = 1; $i <= 20; $i++) {
    echo "<li>" . kategoriBilangan($i) . "</li>";
}
echo "</ul>";
?>