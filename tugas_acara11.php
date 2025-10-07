<?php
echo "=== PROGRAM PENJUMLAHAN 2 MATRIKS 3x3 ===<br><br>";

// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil (kosong dulu)
$C = [];

// Proses penjumlahan pakai looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan Matriks A
echo "Matriks A:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $A[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>Matriks B:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $B[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>Hasil Penjumlahan (Matriks C = A + B):<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
