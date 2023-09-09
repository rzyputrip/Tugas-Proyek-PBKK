<?php

// Mengimpor file kelas yang diperlukan
require_once("animal.php");
require_once("monyet.php");
require_once("frog.php");

// Membuat objek baru dari kelas Animal dengan nama "shaun"
$sheep = new Animal("shaun");
echo "Name : ". $sheep->name . "<br>";  // Mencetak nama hewan
echo "Legs : ". $sheep->legs . "<br>";  // Mencetak jumlah kaki hewan
echo "Cold Blooded : ". $sheep->cold_blooded . "<br>";  // Mencetak apakah hewan berdarah dingin
echo "Yell : " . $sheep->yell() . "<br> <br>";  // Memanggil dan mencetak hasil metode yell()

// Membuat objek baru dari kelas frog dengan nama "buduk"
$kodok = new frog("buduk");
echo "Name : ". $kodok->name . "<br>";  // Mencetak nama hewan kodok
echo "Legs : ". $kodok->legs . "<br>";  // Mencetak jumlah kaki kodok
echo "Cold Blooded : ". $kodok->cold_blooded . "<br>";  // Mencetak apakah kodok berdarah dingin
echo "Jump : " . $kodok->jump() . "<br> <br>";  // Memanggil dan mencetak hasil metode jump() untuk kodok

// Membuat objek baru dari kelas Monyet dengan nama "kera sakti"
$sungokong = new Monyet("kera sakti");
echo "Name : ". $sungokong->name . "<br>";  // Mencetak nama hewan monyet
echo "Legs : ". $sungokong->legs . "<br>";  // Mencetak jumlah kaki monyet
echo "Cold Blooded : ". $sungokong->cold_blooded . "<br>";  // Mencetak apakah monyet berdarah dingin
echo  "Yell : " . $sungokong->yell() . "<br> <br>";  // Memanggil dan mencetak hasil metode yell() untuk monyet

?>
