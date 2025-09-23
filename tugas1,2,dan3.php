<?php
// ==========================
// Soal Nomor 1
// ==========================
echo "<h2>1. Kenapa string bisa jadi angka?</h2>";

$a = "10"; // string
$b = "20"; // string
$hasil = $a + $b;

echo "Biasanya tanda kutip menandakan data string (teks).<br>";
echo "Contoh: \$a = \"$a\" dan \$b = \"$b\" sebenarnya string.<br>";
echo "Namun, PHP punya fitur type juggling (konversi otomatis).<br>";
echo "Saat ada operasi aritmatika (+, -, *, /), PHP mencoba mengubah string menjadi angka.<br>";
echo "Karena isi string hanya angka, maka \"$a\" jadi 10 dan \"$b\" jadi 20.<br>";
echo "Sehingga hasil \$a + \$b = $hasil.<br>";
echo "Kalau string berisi huruf misalnya \"10abc\", maka PHP ambil angka depannya (10), sisanya diabaikan.<br><br>";

// ==========================
// Soal Nomor 2
// ==========================
echo "<h2>2. Bedanya operator / dan %</h2>";

$x = 10;
$y = 3;

echo "Operator / digunakan untuk pembagian biasa.<br>";
echo "Contoh: $x / $y = " . ($x / $y) . " (hasil pecahan/desimal).<br><br>";

echo "Operator % (modulus) digunakan untuk mencari sisa pembagian.<br>";
echo "Contoh: $x % $y = " . ($x % $y) . " (karena 10 dibagi 3 = 3 sisa 1).<br><br>";

echo "Kesimpulan:<br>";
echo "- / = hasil bagi (bisa pecahan).<br>";
echo "- % = sisa pembagian (bilangan bulat).<br>";
echo "Contoh penggunaan: cek angka ganjil/genap dengan modulus.<br><br>";

// ==========================
// Soal Nomor 3
// ==========================
echo "<h2>3. Menggabungkan string tugas1 dan tugas2 menjadi 9080</h2>";

$tugas1 = 90;
$tugas2 = 80;
$gabung = $tugas1 . $tugas2;

echo "Jika kita ingin menggabungkan nilai 90 dan 80 tanpa menjumlahkan,<br>";
echo "kita gunakan operator titik (.) untuk penggabungan string.<br>";
echo "Contoh: \$tugas1 = $tugas1 dan \$tugas2 = $tugas2<br>";
echo "Maka \$tugas1 . \$tugas2 = $gabung<br>";
echo "Hasilnya adalah string \"9080\", bukan hasil penjumlahan.<br><br>";

// ==========================
// Kode tambahan dari soal
// ==========================
echo "<h2>Kode String dari Soal</h2>";

$string1='Ini adalah string sederhana';
$string2='Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3='Dia berkata: "I\'ll be back"';
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";
?>
