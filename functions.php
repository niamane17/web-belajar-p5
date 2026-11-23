<?php

function rupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function hitung_total($harga, $qty, $diskon = 0) {
    return $harga * $qty * (1 - $diskon);
}
