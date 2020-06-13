<?php

session_start();

$username = $_POST['username'];
$_SESSION['namauser'] = $username;
$username = $_POST['username'];

echo "Username Anda: $username<br><br>";
echo "<a href=Latihan_48.php>Halaman 1</a>";