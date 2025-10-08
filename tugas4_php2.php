<?php
echo "=== SOAL 4: ARRAY 2 DIMENSI 3x3 ANGKA ACAK ===<br><br>";

// Membuat array 3x3 berisi angka acak (1–9)
$angka = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "Matriks 3x3:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $total += $angka[$i][$j];
    }
}

echo "<br>Jumlah total semua elemen: " . $total;
?>
