<?php
include "config/connection.php";

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id = $id";
if ($mysqli->query($sql)) {
  echo "<script>alert('Data Berhasil di hapus'); window.location.href = 'index.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
