<?php
function hitungDiskon($totalBelanja) {
    if ($totalBelanja >= 500000) {
        return 50; // Diskon 50%
    } elseif ($totalBelanja >= 100000) {
        return 10; // Diskon 10%
    } elseif ($totalBelanja >= 50000) {
        return 5;  // Diskon 5%
    } else {
        return 0;  // Tidak ada diskon
    }
}

$totalBelanja = 120000; // Contoh jumlah belanja
$diskon = hitungDiskon($totalBelanja);
$hargaAkhir = $totalBelanja - ($totalBelanja * $diskon / 100);

echo "Total Belanja: Rp$totalBelanja<br>";
echo "Diskon: $diskon%<br>";
echo "Harga Akhir: Rp$hargaAkhir<br>";
?>