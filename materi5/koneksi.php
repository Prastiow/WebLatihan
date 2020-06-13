<?php

$host = "localhost";
$username = "tifecom_Triprastio";
$password = "Tiodesune319";
$db = "tifecom_Prastio";

$koneksi = new mysqli($host, $username, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal");
} else {
    echo "Koneksi berhasil<br>";
}