<?php
class Produk {
private $dataProduk = [
["id" => 1, "nama" => "KOMPUTER", "harga" => 9800000],
["id" => 2, "nama" => "IPHONE", "harga" => 8700000],
["id" => 3, "nama" => "MOUSE", "harga" => 1100000],
];
// Mengambil semua data produk
public function getAllProduk() {
return $this->dataProduk;
}
}