<?php
require_once("animal.php");

class Frog extends Animal {
    public function jump() {
        return "hupla hupla";
    }

    public function yell() {
        return "Hup hup"; // Implementasi suara untuk kodok
    }
}
?>
