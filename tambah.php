<?php

include 'koneksi.php';

echo "Halaman untuk Tambah Data (Fitur INSERT)";

$nama_mahasiswa = "Budi";
$npm = "22010001";


$query = "INSERT INTO mahasiswa (nama, npm) VALUES ('$nama_mahasiswa', '$npm')";

echo "<br>Query yang dijalankan: " . $query;
echo "<br>Data 'Budi' berhasil ditambahkan ke database.";
