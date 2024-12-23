<!DOCTYPE html>
<html>
<head>
    <title>Latihan4b.php</title>
</head>
<body>

<?php
// Array awal dengan 5 negara ASEAN
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan daftar negara ASEAN awal
echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 negara baru ke dalam array
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Menampilkan daftar negara ASEAN setelah penambahan
echo "<h3>Daftar Negara ASEAN baru :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>