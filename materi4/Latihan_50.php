<?php

if (isset($_COOKIE['KunjunganTerakhir'])) {
    $visit = $_COOKIE['KunjunganTerakhir'];
    echo "Kunjungan Anda terakhir pada - ".$visit;
} else {
    echo "Anda sudah 2 bulan lebih tidak mengunjungi web ini";
}