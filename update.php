<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$id = $_GET['id'];

$sql = "UPDATE tb_mahasiswa SET nama='$nama', email='$email', jurusan='$jurusan', kelas='$kelas' WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  header("Location: view.php");
} else {
  header("Location: update.php");
}

$conn->close();