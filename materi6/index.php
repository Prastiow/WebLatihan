<?php

require "koneksi.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Kabupaten</title>
</head>
<body>

<h3>Form Input Kabupaten</h3>

<form action="simpanKabupaten.php" method="post">
    <table width="100%" border="0">
        <tr>
            <td width="200">Nama Kabupaten</td>
            <td><input type="text" name="nama_kabupaten"></td>
        </tr>
        <tr>
            <td>Ibukota Kabupaten</td>
            <td><input type="text" name="ibukota_kabupaten"></td>
        </tr>
        <tr>
            <td>Luas Wilayah</td>
            <td><input type="number" name="luas_wilayah"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>
