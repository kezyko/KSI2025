<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "KSI2025";
$koneksi = new mysqli($servername, $username, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi ke database 'KSI2025' GAGAL: " . $koneksi->connect_error);
}
echo "Koneksi ke database 'KSI2025' BERHASIL.";
$koneksi->close();
