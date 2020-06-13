<?php

$harga = 12000;
$jumlah = 12;
echo "<table border='1'>
<tr>
<td><b>Jumlah Barang</b></td>
<td><b>Harga Barang</b></td>
</tr>";
while ( $jumlah <= 100 ) {
    echo "<tr><td>";
    echo $jumlah;
    echo "</td><td>";
    echo "Rp. ".$harga * $jumlah;
    echo "</td></tr>";
    $jumlah = $jumlah + 12;
}
echo "</table>";