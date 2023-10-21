<?php
require_once("animal.php");

class Monyet extends Animal {
    public $legs = 2;

    public function yell() {
        return "Auooo"; // Implementasi suara untuk monyet
    }
}
?>
