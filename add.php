<?php
include "config/connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];

  $sql = "INSERT INTO mahasiswa (nim, nama, prodi, semester) VALUES ('$nim', '$nama', '$prodi', '$semester')";
  if ($mysqli->query($sql)) {
    echo "<script>alert('Data Berhasil disimpan'); window.location.href = 'index.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="POST">
    <label>NIM:</label><br>
    <input type="text" name="nim" required><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>
    <label>Program Studi:</label><br>
    <select name="prodi">
      <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
      <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
      <option value="S2 Teknik Informatika">S2 Teknik Informatika</option>
    </select><br>
    <label>Semester:</label><br>
    <input type="text" name="semester"><br><br>
    <button type="submit">Simpan</button>
    <a href="index.php" class="btn-cancel">Cancel</a>
  </form>
</body>

</html>