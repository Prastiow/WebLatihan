<?php

include "koneksi.php";

$sql = "DELETE FROM kabupaten WHERE id_kabupaten=3";

if ($koneksi->query($sql) == TRUE) {
    echo "Delete data berhasil";
} else {
    echo "Delete data gagal";
}