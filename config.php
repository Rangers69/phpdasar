<?php
$host = "localhost";  // Ganti dengan nama host MySQL Anda
$username = "root";  // Ganti dengan nama pengguna MySQL Anda
$password = "";  // Ganti dengan kata sandi MySQL Anda
$database = "rpl11"; // Ganti dengan nama database yang akan Anda gunakan

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// else{
//     echo 'sukses';
//     var_dump($koneksi);
// }
