<?php
echo "=== SOAL 1: ARRAY 2 DIMENSI DATA SISWA ===<br><br>";

// Membuat array 2 dimensi: [Nama, Nilai Matematika, Nilai Bahasa]
$siswa = [
    ["Alifa", 85, 90],
    ["Rachmad", 78, 88],
    ["Windita", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . "): " . $siswa[1][2] . "<br><br>";

// Cetak semua data siswa dengan looping
echo "Data semua siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . "<br>";
    echo "Nilai Matematika: " . $siswa[$i][1] . "<br>";
    echo "Nilai Bahasa: " . $siswa[$i][2] . "<br><br>";
}
?>
