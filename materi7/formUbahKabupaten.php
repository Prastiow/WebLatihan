<?php

require "../function/helper.php";
require "../materi6/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM kabupaten WHERE id_kabupaten='$id'");
$data = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Kabupaten</title>
</head>
<body>
<h3>Form Ubah Kabupaten</h3>
<form action="<?= BASE_URL.'materi7/ubahKabupaten.php?id='.$id?>" method="post">
    <table width="600" border="0">
        <tr>
            <td width="157">Nama Kabupaten</td>
            <td width="433"><input type="text" name="nama_kabupaten" value="<?= $data['nama_kabupaten']?>"></td>
        </tr>
        <tr>
            <td>Ibukota Kabupaten</td>
            <td><input type="text" name="ibukota_kabupaten" value="<?= $data['ibukota_kabupaten']?>"></td>
        </tr>
        <tr>
            <td>Luas Wilayah</td>
            <td><input type="number" name="luas_wilayah" value="<?= $data['luas_wilayah']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Ubah"></td>
        </tr>
    </table>
</form>
</body>
</html>
