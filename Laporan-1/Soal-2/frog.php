<?php

// Mengimpor file kelas yang diperlukan, dalam hal ini "animal.php"
require_once("animal.php");

// Mendefinisikan kelas Frog yang merupakan turunan dari kelas Animal
class Frog extends Animal {
    
    // Metode jump() milik kelas Frog yang mengembalikan suara loncatan kodok
    public function jump() {
        return "hupla hupla";
    }

}


?>
