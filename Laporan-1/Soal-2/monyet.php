<?php

// Mengimpor file kelas yang diperlukan, dalam hal ini "animal.php"
require_once("animal.php");

// Mendefinisikan kelas Monyet yang merupakan turunan dari kelas Animal
class Monyet extends Animal {
    
    // Properti baru $legs untuk kelas Monyet, menggantikan nilai dari kelas Animal
    public $legs = 2;

    // Metode yell() milik kelas Monyet yang mengembalikan suara teriakan monyet
    public function yell() {
        return "Auooo";
    }
}


?>
