<?php

function kali($x, $y) {
    $hasil = $x * $y;
    return $hasil;
}
$angka = 2;
echo "Angka mula-mula adalah ".$angka."<br>";
$angka = kali(2, 6);
echo "Angka setelah memanggil function adalah ".$angka."<br>";