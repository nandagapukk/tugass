<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Segitiga</title>
    <style>
        .ganjil {
            background-color: #003; /* Warna biru tua */
            color: #fff;
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            margin: 2px;
        }
        .genap {
            background-color: #999; /* Warna abu-abu */
            color: #000;
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            margin: 2px;
        }
        .row {
            clear: both;
        }
    </style>
</head>
<body>

<?php
// Looping untuk membuat pola segitiga
for ($i = 1; $i <= 5; $i++) {
    echo '<div class="row">';
    for ($j = 1; $j <= $i; $j++) {
        // Pengkondisian untuk kelas ganjil dan genap
        $class = ($i % 2 == 0) ? 'genap' : 'ganjil';
        echo "<div class='$class'>$j</div>";
    }
    echo '</div>';
}
?>

</body>
</html>