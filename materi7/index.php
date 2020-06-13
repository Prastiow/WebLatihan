<?php

require "../function/helper.php";
require "../materi6/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM kabupaten");
$total = mysqli_num_rows($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kabupaten</title>
</head>
<body>
<h3>Tampil Data Kabupaten</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Kabupaten</th>
        <th>Ibukota Kabupaten</th>
        <th>Luas Wilayah</th>
        <th>Ubah</th>
    </tr>
    <?php

    while ($data=mysqli_fetch_array($query)) {
        echo "<tr>\n";
        echo "<td>$data[id_kabupaten]</td>\n";
        echo "<td>$data[nama_kabupaten]</td>\n";
        echo "<td>$data[ibukota_kabupaten]</td>\n";
        echo "<td>$data[luas_wilayah]</td>\n";
        echo "<td align='center' id='ubah'><a href='".BASE_URL."materi7/formUbahKabupaten.php?id=$data[id_kabupaten]'><img src='../img/pencil.png' alt='Icon Ubah'></a></td>\n";
        echo "</tr>\n";
    }

    echo "</table>\n";
    echo "<p>Jumlah data:<b>$total</b></p>";

    ?>

</body>
</html>
