<?php

include "koneksi.php";

$sql = "CREATE TABLE kabupaten (id_kabupaten int, nama_kabupaten varchar (30), ibukota_kabupaten varchar(30), luas_wilayah int(5))";

if ($koneksi->query($sql) == TRUE) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel sudah ada";
}