<?php
require_once("animal.php");
require_once("frog.php");
require_once("monyet.php");

// Membuat objek baru dari kelas Frog dengan nama "buduk"
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";  
echo "Legs : " . $kodok->legs . "<br>";  
echo "Cold Blooded : " . ($kodok->is_cold_blooded ? "yes" : "no") . "<br>";  
echo "Jump : " . $kodok->jump() . "<br> <br>";

// Membuat objek baru dari kelas Monyet dengan nama "kera sakti"
$sungokong = new Monyet("kera sakti");
echo "Name : " . $sungokong->name . "<br>";  
echo "Legs : " . $sungokong->legs . "<br>";  
echo "Cold Blooded : " . ($sungokong->is_cold_blooded ? "yes" : "no") . "<br>";  
echo "Yell : " . $sungokong->yell() . "<br> <br>";
?>
