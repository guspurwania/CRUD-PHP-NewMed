<?php

include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM tb_mahasiswa WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  header("Location: view.php");
} else {
  header("Location: view.php");
}

$conn->close();