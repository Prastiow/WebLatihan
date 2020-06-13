<?php

include "koneksi.php";

$sql = "SELECT DISTINCT nama_kabupaten FROM kabupaten";
$result = $koneksi->query($sql);

foreach ($result as $result) {
    $name = $result["nama_kabupaten"];
    echo "<tr>
            <td>$name</td>
          </tr>";
}