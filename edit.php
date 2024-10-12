<?php
include "config/connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];
  $fakultas = $_POST['fakultas'];
  $alamat = $_POST['alamat'];

  $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', prodi = '$prodi', semester = '$semester', fakultas = '$fakultas', alamat = '$alamat' WHERE id = $id";
  if ($mysqli->query($sql)) {
    echo "<script>alert('Data Berhasil di edit'); window.location.href = 'index.php';</script>";
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
  <title>Edit Data</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <h1>Edit Data Mahasiswa</h1>
  <form method="POST" action="">
    <label>NIM:</label><br>
    <input type="text" name="nim" value="<?= $row['nim']; ?>" required><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>
    <label>Alamat:</label><br>
    <textarea name="alamat"><?= $row['alamat']; ?></textarea><br>
    <label>Fakultas:</label><br>
    <select name="fakultas">
      <option value="Alam Ghaib" <?= ($row['fakultas'] == 'Alam Ghaib') ? 'selected' : ''; ?>>Alam Ghaib</option>
      <option value="Kedokteran" <?= ($row['fakultas'] == 'Kedokteran') ? 'selected' : ''; ?>>Kedookteran</option>
      <option value="Fisip" <?= ($row['fakultas'] == 'Fisip') ? 'selected' : ''; ?>>Fisip</option>
      <option value="Haha Hihi" <?= ($row['fakultas'] == 'Haha Hihi') ? 'selected' : ''; ?>>Haha Hihi</option>
      <option value="Teknik" <?= ($row['fakultas'] == 'Teknik') ? 'selected' : ''; ?>>Teknik</option>
      <option value="Olahraga" <?= ($row['fakultas'] == 'Olahraga') ? 'selected' : ''; ?>>Olahraga</option>
      <option value="Olah Oleh" <?= ($row['fakultas'] == 'Olah Oleh') ? 'selected' : ''; ?>>Olah Oleh</option>
    </select><br>
    <label>Program Studi:</label><br>
    <select name="prodi">
      <option value="S1 Teknik Informatika" <?= ($row['prodi'] == 'S1 Teknik Informatika') ? 'selected' : ''; ?>>S1 Teknik Informatika</option>
      <option value="S1 Sistem Informasi" <?= ($row['prodi'] == 'S1 Sistem Informasi') ? 'selected' : ''; ?>>S1 Sistem Informasi</option>
      <option value="S2 Teknik Informatika" <?= ($row['prodi'] == 'S2 Teknik Informatika') ? 'selected' : ''; ?>>S2 Teknik Informatika</option>
      <option value="S2 Sistem Informatika" <?= ($row['prodi'] == 'S2 Sistem Informatika') ? 'selected' : ''; ?>>S2 Sistem Informatika</option>
      <option value="S1 Teknik Mesin" <?= ($row['prodi'] == 'S1 Teknik Mesin') ? 'selected' : ''; ?>>S1 Teknik Mesin</option>
      <option value="S2 Teknik Mesin" <?= ($row['prodi'] == 'S2 Teknik Mesin') ? 'selected' : ''; ?>>S2 Teknik Mesin</option>
      <option value="S1 Sastra Inggris" <?= ($row['prodi'] == 'S1 Sastra Inggris') ? 'selected' : ''; ?>>S1 Sastra Inggris</option>
      <option value="S2 Sastra Inggris" <?= ($row['prodi'] == 'S2 TSastra Inggris') ? 'selected' : ''; ?>>S2 Sastra Inggris</option>
      <option value="S1 Teknik Perkapalan" <?= ($row['prodi'] == 'S1 Teknik Perkapalan') ? 'selected' : ''; ?>>S1 Teknik Perkapalan</option>
    </select><br>
    <label>Semester:</label><br>
    <input type="text" name="semester" value="<?= $row['semester']; ?>"><br><br>
    <button type="submit">Update</button>
    <a href="index.php" class="btn-cancel">Cancel</a>
  </form>
</body>

</html>