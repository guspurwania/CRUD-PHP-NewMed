<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO tb_mahasiswa (nama, email, alamat, jurusan, kelas)
VALUES ('$nama', '$email', '$alamat', '$jurusan', '$kelas')";

if ($conn->query($sql) === TRUE) {
  header("Location: view.php");
} else {
  header("Location: create.php");
}

$conn->close();