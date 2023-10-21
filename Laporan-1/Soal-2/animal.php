<?php
abstract class Animal {
    public $legs = 4;
    public $name;
    public $is_cold_blooded = false;

    public function __construct($nama) {
        $this->name = $nama;
    }

    abstract public function yell();
}
?>
