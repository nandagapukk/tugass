<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr> 
        
        <?php
        
        $rows = 15;

        
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";

        
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>Baris $i, Kolom $j</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>       
</body>
</html>
