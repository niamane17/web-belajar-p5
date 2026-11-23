<?php
require_once __DIR__ . '/functions.php';

// Pemanggilan 1: Tanpa argumen kedua (akan menggunakan default $persen = 10)
$hasil1 = hitungDiskon(20000);
echo "Hasil hitungDiskon(20000) adalah: " . $hasil1 . "<br>"; 
// Seharusnya menghasilkan 2000

// Pemanggilan 2: Dengan argumen kedua (misalnya 25%)
$hasil2 = hitungDiskon(20000, 25);
echo "Hasil hitungDiskon(20000, 25) adalah: " . $hasil2 . "<br>"; 
// Seharusnya menghasilkan 5000
?>
