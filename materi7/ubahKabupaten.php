<?php

require "../materi6/koneksi.php";

$id = $_GET['id'];
$nama_kabupaten = $_POST['nama_kabupaten'];
$ibukota_kabupaten = $_POST['ibukota_kabupaten'];
$luas_wilayah = $_POST['luas_wilayah'];

$query = mysqli_query($koneksi, "UPDATE kabupaten SET nama_kabupaten='$nama_kabupaten', ibukota_kabupaten='$ibukota_kabupaten', luas_wilayah='$luas_wilayah' WHERE id_kabupaten='$id'");

if ($query) {
    echo "
    <script>
    alert('Ubah Data Berhasil');
    window.open('index.php', '_top');
    </script>
    ";
} else {
    echo "
    <script>
    alert('Ubah Data Gagal');
    window.open('index.php', '_top');
    </script>
    ";
}