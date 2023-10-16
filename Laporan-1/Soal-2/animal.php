<?php

// Mendefinisikan kelas Animal
abstract class Animal {
    // Properti publik untuk kelas Animal
    public $legs = 4; // Jumlah kaki (nilai default)
    public $name; // Nama hewan (akan diatur saat objek dibuat)
    public $is_cold_blooded = false; // Apakah berdarah dingin (nilai default)

    // Konstruktor kelas Animal, menerima parameter $nama untuk mengatur nama hewan
    public function __construct($nama) {
        $this->name = $nama;
    }

    // Metode yell() mengembalikan suara yang spesifik untuk hewan ini
    abstract public function yell();
}

?>
