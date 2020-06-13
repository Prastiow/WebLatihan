<?php

$nomorHP = "0852-7872-6696";
$hasil = explode("-", $nomorHP, 2);
echo "Nomor HP = $nomorHP <br>";
echo "Bagian 1 = $hasil[0]<br>";
echo "Bagian 2 = $hasil[1]<br>";
echo "Bagian 3 = $hasil[2]";