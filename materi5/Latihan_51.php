<?php

include "koneksi.php";

$sql = "CREATE DATABASE kependudukan_db";

if ($koneksi->query($sql) === TRUE) {
    echo "Database berhasil dibuat";
} else {
    echo "Database sudah ada";
}