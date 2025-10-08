<?php
echo "=== SOAL 2: ARRAY BUAH ===<br><br>";

// Membuat array 2 dimensi [Nama, Harga, Stok]
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $subtotal = $buah[$i][1] * $buah[$i][2]; // harga * stok
    $total += $subtotal;
    echo $buah[$i][0] . " -> Harga: " . $buah[$i][1] . ", Stok: " . $buah[$i][2] . ", Total: " . $subtotal . "<br>";
}

echo "<br>Total nilai semua buah: " . $total;
?>
