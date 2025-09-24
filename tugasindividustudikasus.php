<?php
// ==============================
// 1. Mesin Penjual Minuman
// ==============================
$pilihan = 2; // ganti angka 1-3 untuk coba
echo "<h3>1. Mesin Penjual Minuman</h3>";
if ($pilihan == 1) {
    echo "Anda memilih Teh Manis";
} elseif ($pilihan == 2) {
    echo "Anda memilih Kopi Hitam";
} elseif ($pilihan == 3) {
    echo "Anda memilih Air Mineral";
} else {
    echo "Pilihan tidak tersedia";
}
echo "<hr>";

// ==============================
// 2. Diskon Tiket Bioskop
// ==============================
$umur = 65; // ganti sesuai kebutuhan
echo "<h3>2. Diskon Tiket Bioskop</h3>";
if ($umur < 12) {
    echo "Diskon 50% untuk tiket bioskop!";
} elseif ($umur <= 18) {
    echo "Diskon 25% untuk tiket bioskop!";
} elseif ($umur > 60) {
    echo "Selamat! Tiket bioskop gratis!";
} else {
    echo "Harga tiket normal.";
}
echo "<hr>";

// ==============================
// 3. Penilaian Restoran
// ==============================
$rating = 4; // ganti 1-5
echo "<h3>3. Penilaian Restoran</h3>";
if ($rating == 5) {
    echo "Luar biasa! Terima kasih atas penilaian sempurnanya.";
} elseif ($rating == 4) {
    echo "Mantap! Kami senang Anda puas.";
} elseif ($rating == 3) {
    echo "Cukup baik, kami akan tingkatkan lagi.";
} elseif ($rating == 2) {
    echo "Kurang memuaskan, mohon maaf atas kekurangannya.";
} elseif ($rating == 1) {
    echo "Sangat buruk, kami akan evaluasi serius.";
} else {
    echo "Rating tidak valid.";
}
echo "<hr>";

// ==============================
// 4. Pengecekan Cuaca
// ==============================
$cuaca = "hujan"; // bisa diubah: cerah / hujan / berawan
echo "<h3>4. Pengecekan Cuaca</h3>";
if ($cuaca == "cerah") {
    echo "Cuaca cerah! Yuk main bola di lapangan.";
} elseif ($cuaca == "hujan") {
    echo "Hujan turun, enaknya nonton film di rumah.";
} elseif ($cuaca == "berawan") {
    echo "Langit mendung, santai jalan-jalan aja.";
} else {
    echo "Cuaca tidak diketahui.";
}
echo "<hr>";

// ==============================
// 5. Status Baterai HP
// ==============================
$baterai = 25; // ganti persentase baterai
echo "<h3>5. Status Baterai HP</h3>";
if ($baterai >= 80) {
    echo "Baterai penuh, cabut charger!";
} elseif ($baterai >= 30) {
    echo "Baterai cukup, bisa digunakan dengan aman.";
} else {
    echo "Baterai lemah! Segera isi daya.";
}
echo "<hr>";
?>
