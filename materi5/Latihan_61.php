<?php

include "koneksi.php";

$sql = "UPDATE kabupaten SET nama_kabupaten='Siak', ibukota_kabupaten='Siak Sri Indrapura' WHERE id_kabupaten=5";

if ($koneksi->query($sql) == TRUE) {
    echo "Update data berhasil";
} else {
    echo "Update data gagal";
}