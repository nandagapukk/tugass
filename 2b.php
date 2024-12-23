<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping Box</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
        $rows = 5; // Number of rows

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box'>$j</div>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
