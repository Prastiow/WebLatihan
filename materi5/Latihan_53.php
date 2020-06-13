<?php

include "koneksi.php";

$sql = "INSERT INTO kabupaten (id_kabupaten, nama_kabupaten, ibukota_kabupaten, luas_wilayah) VALUES ('1', 'Indragiri Hilir', 'Tembilahan', '19985')";

if ($koneksi->query($sql) == TRUE) {
    echo "Insert data telah berhasil";
} else {
    echo "Insert data gagal";
}