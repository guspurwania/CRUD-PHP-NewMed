<?php

// Deklarasikan Variable untuk terhubung ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

// Buat Koneksi ke Database menggunakan perintah mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek Jika Koneksi Gagal
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>