<?php
    // Initial array with 5 ASEAN countries
    $asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4b.php</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal :</h3>
    <ul>
        <?php
            foreach ($asean as $negara) {
                echo "<li>$negara</li>";
            }
        ?>
    </ul>

    <?php
        // Adding 3 more countries to the array
        array_push($asean, "Laos", "Filipina", "Myanmar");
    ?>

    <h3>Daftar Negara ASEAN baru :</h3>
    <ul>
        <?php
            foreach ($asean as $negara) {
                echo "<li>$negara</li>";
            }
        ?>
    </ul>
</body>
</html>
