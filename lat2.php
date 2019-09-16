<?php
session_start();
if (isset($_SESSION['Login'])) {
    echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah
    login</h2>";
    echo "hal1";
    # code...
}else{
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
    Silahkan login <a href='lat1.php'>di sini</a>");
}
?>