<?php
// Data Produk
$products = [
    ["id" => 1, "product" => "Buavita", "stock" => 30, "price" => 7890],
    ["id" => 2, "product" => "Bango", "stock" => 21, "price" => 21890],
    ["id" => 3, "product" => "Sariwangi", "stock" => 10, "price" => 9990],
    ["id" => 4, "product" => "Shampo", "stock" => 23, "price" => 32450],
    ["id" => 5, "product" => "Bedak", "stock" => 11, "price" => 15750],
    ["id" => 6, "product" => "Baju", "stock" => 13, "price" => 55490],
    ["id" => 7, "product" => "Jumper", "stock" => 2, "price" => 52430],
];

// a. Menghitung Jumlah Total untuk setiap produk dan Jumlah Total keseluruhan
$totalAmount = 0;
foreach ($products as &$product) {
    $product["amount"] = $product["stock"] * $product["price"];
    $totalAmount += $product["amount"];
}
unset($product); // Release reference

// b. Menghitung Diskon
$discountRate = 0;
if ($totalAmount >= 400000) {
    $discountRate = 0.3; // 30%
} elseif ($totalAmount >= 200000) {
    $discountRate = 0.15; // 15%
}
$discountAmount = $totalAmount * $discountRate;
$totalPayment = $totalAmount - $discountAmount;

// c. Menampilkan Array Multidimensional
echo "<h3>Tabel Harga Barang</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>{$product['id']}</td>";
    echo "<td>{$product['product']}</td>";
    echo "<td>{$product['stock']}</td>";
    echo "<td>" . number_format($product['price'], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($product['amount'], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='4'><strong>Total</strong></td><td><strong>" . number_format($totalAmount, 0, ',', '.') . "</strong></td></tr>";
echo "</table>";
?>





