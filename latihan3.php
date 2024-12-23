<?php

$nilai = 90; 


if ($nilai >= 86 && $nilai <= 100) {
    echo "Nilainya A. Keterangan: Sangat Baik";
} elseif ($nilai >= 76 && $nilai <= 85) {
    echo "Nilainya B. Keterangan: Baik";
} elseif ($nilai >= 66 && $nilai <= 75) {
    echo "Nilainya C. Keterangan: Cukup";
} elseif ($nilai >= 0 && $nilai <= 65) {
    echo "Nilainya D. Keterangan: Kurang";
} else {
    echo "Nilai di Luar Range";
}
?>
