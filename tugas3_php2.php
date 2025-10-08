<?php
echo "=== SOAL 3: ARRAY ASOSIATIF MULTIDIMENSI PRODUK E-COMMERCE ===<br><br>";

// Membuat array asosiatif multidimensi
$produk = [
    [
        "nama" => "Laptop Asus Vivobook",
        "kategori" => "Elektronik",
        "harga" => 8500000,
        "rating" => 4.7
    ],
    [
        "nama" => "Smartphone Samsung A15",
        "kategori" => "Elektronik",
        "harga" => 3200000,
        "rating" => 4.5
    ],
    [
        "nama" => "Sepatu Nike Air Zoom",
        "kategori" => "Fashion",
        "harga" => 2100000,
        "rating" => 4.8
    ]
];

// Tampilkan semua produk
echo "Daftar Produk:<br>";
foreach ($produk as $item) {
    echo "Nama Produk: " . $item["nama"] . "<br>";
    echo "Kategori: " . $item["kategori"] . "<br>";
    echo "Harga: Rp " . number_format($item["harga"], 0, ',', '.') . "<br>";
    echo "Rating: " . $item["rating"] . "<br><br>";
}

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
for ($i = 1; $i < count($produk); $i++) {
    if ($produk[$i]["harga"] > $tertinggi["harga"]) {
        $tertinggi = $produk[$i];
    }
}

// Cetak produk dengan harga tertinggi
echo "=== Produk dengan Harga Tertinggi ===<br>";
echo "Nama Produk: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
