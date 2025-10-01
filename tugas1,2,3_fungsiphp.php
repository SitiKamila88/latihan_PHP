<?php
echo "=== SOAL 1: Bilangan Terbesar dari 2 Bilangan ===<br>";

// Fungsi untuk menentukan bilangan terbesar
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan pertama: $bil1 <br>";
echo "Bilangan kedua: $bil2 <br>";
echo "Bilangan terbesar adalah: " . terbesar($bil1, $bil2) . "<br><br>";


echo "=== SOAL 2: Tanggal dengan getdate() ===<br>";
$sekarang = getdate();
echo "Sekarang Tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"] . "<br><br>";


echo "=== SOAL 3: Tanggal dengan date('d-F-Y') ===<br>";
echo "Sekarang Tanggal: " . date("d-F-Y") . "<br>";
?>