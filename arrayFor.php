<?php
    $nama = ["Ahmad", "Budi", "Chika", "Dhani", "Erwin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for array</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($nama); $i++) { // Using count to get array length
            echo "<li>$nama[$i]</li>"; // Output each element in an HTML list item
        }
    ?>
</body>
</html>

