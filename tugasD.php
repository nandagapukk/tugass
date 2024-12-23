<!DOCTYPE html>
<html>
<head>
    <title>Latihan4d.php</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Membuat array multidimensi
$negara_asean = [
    ["negara" => "Indonesia", "ibukota" => "D.K.I. Jakarta", "kode_telepon" => "+62"],
    ["negara" => "Singapura", "ibukota" => "Singapura", "kode_telepon" => "+65"],
    ["negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode_telepon" => "+60"],
    ["negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode_telepon" => "+673"],
    ["negara" => "Thailand", "ibukota" => "Bangkok", "kode_telepon" => "+66"],
    ["negara" => "Laos", "ibukota" => "Vientiane", "kode_telepon" => "+856"],
    ["negara" => "Filipina", "ibukota" => "Manila", "kode_telepon" => "+63"],
    ["negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode_telepon" => "+95"]
];

// Menampilkan data dalam bentuk tabel
echo "<h3>Daftar Negara ASEAN dan Ibukota :</h3>";
echo "<table>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara_asean as $data) {
    echo "<tr>";
    echo "<td>{$data['negara']}</td>";
    echo "<td>{$data['ibukota']}</td>";
    echo "<td>{$data['kode_telepon']}</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>