<?php
// Array multidimensi untuk menyimpan data produk (nama, stok, harga satuan)
$produk = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20789],
    ["nama" => "Downy", "stok" => 25, "harga" => 12880],
    ["nama" => "Le Mineral", "stok" => 25, "harga" => 5650],
];

// Menghitung jumlah total per produk dan total keseluruhan
$totalKeseluruhan = 0;
foreach ($produk as &$item) {
    $item["jumlah"] = $item["stok"] * $item["harga"];
    $totalKeseluruhan += $item["jumlah"];
}

// Menghitung diskon
$diskon = 0;
if ($totalKeseluruhan > 300000) {
    $diskon = 0.25 * $totalKeseluruhan;
} elseif ($totalKeseluruhan > 200000) {
    $diskon = 0.20 * $totalKeseluruhan;
}
$totalPembayaran = $totalKeseluruhan - $diskon;

// Tanggal transaksi
$tanggalTransaksi = date("d F Y");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 60%; /* Ukuran tabel sedang */
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        h2 {
            text-align: center;
        }
        .transaction-summary {
            width: 50%; /* Ukuran tabel transaksi sedang */
            margin: 20px auto;
            border-collapse: collapse;
        }
        .transaction-summary td {
            padding: 8px;
        }
        .transaction-summary .label {
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php foreach ($produk as $index => $item): ?>
    <tr>
        <td><?= $index + 1; ?></td>
        <td><?= $item["nama"]; ?></td>
        <td><?= $item["stok"]; ?></td>
        <td><?= number_format($item["harga"], 0, ',', '.'); ?></td>
        <td><?= number_format($item["jumlah"], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Transaksi</h2>
<p style="text-align: center;">Tanggal Transaksi: <?= $tanggalTransaksi; ?></p>
<table class="transaction-summary">
    <?php foreach ($produk as $item): ?>
    <tr>
        <td class="label"><?= $item["nama"]; ?> (<?= $item["stok"]; ?> x <?= number_format($item["harga"], 0, ',', '.'); ?>)</td>
        <td>: <?= number_format($item["jumlah"], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td class="label"><strong>Total</strong></td>
        <td>: <?= number_format($totalKeseluruhan, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td class="label"><strong>Diskon</strong></td>
        <td>: <?= number_format($diskon, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td class="label"><strong>Total Pembayaran</strong></td>
        <td>: <?= number_format($totalPembayaran, 0, ',', '.'); ?></td>
    </tr>
</table>

</body>
</html>



