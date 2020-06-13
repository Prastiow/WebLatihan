<?php

$harga = 12000;
echo "<table border='1'>
<tr>
<td><b>Jumlah Barang</b></td>
<td><b>Harga Barang</b></td>
</tr>";
for ($jumlah = 12; $jumlah <= 100; $jumlah+=12) {
    echo "<tr><td>";
    echo $jumlah;
    echo "</td><td>";
    echo "Rp. ".$harga * $jumlah;
    echo "</td></tr>";
}
echo "</table>";