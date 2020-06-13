<?php

session_start();

echo "Ini adalah Halaman 1<br>";
echo "Username Anda:".$_SESSION['namauser']."<br><br>";
echo "<a href=Latihan_48.php>Halaman 1</a>";