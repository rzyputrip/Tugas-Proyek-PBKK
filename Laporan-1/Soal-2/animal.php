<?php

// Mendefinisikan kelas Animal
class Animal {
    // Properti publik untuk kelas Animal
    public $legs = 4; // Jumlah kaki (nilai default)
    public $name; // Nama hewan (akan diatur saat objek dibuat)
    public $cold_blooded = "no"; // Apakah berdarah dingin (nilai default)

    // Konstruktor kelas Animal, menerima parameter $nama untuk mengatur nama hewan
    public function __construct($nama) {
        $this->name = $nama;
    }

    // Metode yell() mengembalikan suara yang spesifik untuk hewan ini
    public function yell() {
        return "Mbee Mbee";
    }
}


?>
