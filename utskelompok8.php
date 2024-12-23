<?php
// Data produk dalam bentuk array multidimensional
$products = [
    ["id" => 1, "name" => "Pepsodent", "stock" => 30, "price" => 11980],
    ["id" => 2, "name" => "Sunlight", "stock" => 15, "price" => 12880],
    ["id" => 3, "name" => "Baygon", "stock" => 10, "price" => 16779],
    ["id" => 4, "name" => "Dove", "stock" => 20, "price" => 22688],
    ["id" => 5, "name" => "Rinso", "stock" => 20, "price" => 20789],
    ["id" => 6, "name" => "Downy", "stock" => 12, "price" => 12880],
    ["id" => 7, "name" => "Le Mineral", "stock" => 25, "price" => 5650]
];

// Fungsi untuk menghitung total harga per produk
function calculateTotalPrice($product) {
    return $product["stock"] * $product["price"];
}

// Menyimpan total pembelian keseluruhan
$totalPurchase = 0;
foreach ($products as &$product) {
    $product["total"] = calculateTotalPrice($product);
    $totalPurchase += $product["total"];
}

// Menentukan diskon berdasarkan total pembelian
$discount = 0;
if ($totalPurchase >= 300000) {
    $discount = 0.25;
} elseif ($totalPurchase >= 200000) {
    $discount = 0.20;
}

// Menghitung total pembayaran setelah diskon
$totalDiscount = $totalPurchase * $discount;
$totalPayment = $totalPurchase - $totalDiscount;

// Tanggal transaksi
$date = date("d F Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaksi</title>
</head>
<body>
    <h2>Tabel Harga Barang</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product["id"] ?></td>
                <td><?= $product["name"] ?></td>
                <td><?= $product["stock"] ?></td>
                <td><?= number_format($product["price"], 0, ',', '.') ?></td>
                <td><?= number_format($product["total"], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Rincian Transaksi</h2>
    <p>Tanggal Transaksi: <?= $date ?></p>
    <table border="1">
        <tr>
            <td>Total Pembelian</td>
            <td>Rp <?= number_format($totalPurchase, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td><?= $discount * 100 ?>%</td>
        </tr>
        <tr>
            <td>Total Diskon</td>
            <td>Rp <?= number_format($totalDiscount, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Total Pembayaran</td>
            <td>Rp <?= number_format($totalPayment, 0, ',', '.') ?></td>
        </tr>
    </table>
</body>
</html>QN