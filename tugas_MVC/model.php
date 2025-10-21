<?php
class Buku {
    private $dataBuku = [];

    public function __construct() {
        // Data contoh — bisa diganti database nanti
        $this->dataBuku = [
            ["judul" => "No Longer Human", "pengarang" => "Osamu Dazai", "tahun" => 1995],
            ["judul" => "The Setting Sun", "pengarang" => "Osamu Dazai", "tahun" => 1947],
            ["judul" => "Schoolgirl", "pengarang" => "Osamu Dazai", "tahun" => 1987],
        ];
    }

    // Ambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
