<?php

include "koneksi.php";

$sql = "SELECT * FROM kabupaten WHERE nama_kabupaten LIKE '%indra%'";
$result = $koneksi->query($sql);

foreach ($result as $result) {
    $id = $result["id_kabupaten"];
    $name = $result["nama_kabupaten"];
    $ibukota = $result["ibukota_kabupaten"];
    $luas = $result["luas_wilayah"];
    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$ibukota</td>
            <td>$luas</td>
          </tr>";
}