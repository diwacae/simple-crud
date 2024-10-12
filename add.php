<?php
include "config/connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];
  $fakultas = $_POST['fakultas'];
  $alamat = $_POST['alamat'];

  $sql = "INSERT INTO mahasiswa (nim, nama, prodi, semester, fakultas, alamat) VALUES ('$nim', '$nama', '$prodi', '$semester', '$fakultas', '$alamat')";
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
    <input type="number" name="nim" required><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>
    <label>alamat:</label><br>
    <textarea type="text" name="alamat" ></textarea><br>
    <label>fakultas:</label><br>

    <select name="fakultas">
      <option value="Alam Ghaib">Alam Ghaib</option>
      <option value="Kedokteran">Kedokteran</option>
      <option value="Fisip">Fisip</option>
      <option value="Haha Hihi">Haha Hihi</option>
      <option value="Teknik">Teknik</option>
      <option value="Olahraga">Olahraga</option>
      <option value="Olah Oleh">Olah Oleh</option>
    </select><br>

    <label>Program Studi:</label><br>
    <select name="prodi">
      <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
      <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
      <option value="S2 Teknik Informatika">S2 Teknik Informatika</option>
      <option value="S2 sistem Informatika">S2 Sistem Informatika</option>
      <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
      <option value="S2 Teknik Mesin">S2 Teknik Mesin</option>
      <option value="S1 Sastra Inggris">S1 Sastra Inggris</option>
      <option value="S2 Sastra Inggris">S2 Sastra Inggris</option>
      <option value="S1 Teknik Perkapalan">S1 Teknik Perkapalan</option>
    </select><br>
    <label>Semester:</label><br>
    <input type="number" name="semester"><br><br>
    <button type="submit">Simpan</button>
    <a href="index.php" class="btn-cancel">Cancel</a>
  </form>
</body>

</html>