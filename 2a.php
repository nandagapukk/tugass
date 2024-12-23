<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <?php
            // Define number of columns
            $columns = 5;

            // Display column headers dynamically
            for ($i = 1; $i <= $columns; $i++) {
                echo "<th>Kolom $i</th>";
            }
            ?>
        </tr>
        
        <?php
        //
        $rows = 15;

        // Loop to create rows
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";

            // Loop to create columns in each row
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>Baris $i, Kolom $j</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>