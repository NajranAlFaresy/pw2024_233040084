<?php
function cetak_angka($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$i";
        }
        echo "<br>";
    }
}

cetak_angka (10);
echo "<hr>";
cetak_angka (1000);