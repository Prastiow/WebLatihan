<?php

require "koneksi.php";

if (($_POST['nama_kabupaten'] == "") or ($_POST['ibukota_kabupaten'] == "") or ($_POST['luas_wilayah'] == "")) {
    echo "
<script>
    alert('Data Tidak Boleh Kosong');
    window.open('index.php', '_top');
</script>";
} else {
    $nama_kabupaten = $_POST['nama_kabupaten'];
    $ibukota_kabupaten = $_POST['ibukota_kabupaten'];
    $luas_wilayah = $_POST['luas_wilayah'];

    $hasil = mysqli_query($koneksi, "INSERT INTO kabupaten (nama_kabupaten, ibukota_kabupaten, luas_wilayah) VALUES ('$nama_kabupaten', '$ibukota_kabupaten', '$luas_wilayah')");

    if ($hasil) {
        echo "
<script>
    alert('Data Berhasil Disimpan');
    window.open('index.php', '_top');
</script>";
    } else {
        echo "
<script>
    alert('Data Gagal Disimpan');
    window.open('index.php', '_top');
</script>";
    }
}