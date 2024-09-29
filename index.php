 <?php
  include "config/connection.php";

  $sql = "SELECT * FROM mahasiswa";
  $result = $mysqli->query($sql);

  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Mahasiswa</title>
 </head>

 <body>
   <h1>Data Mahasiswa</h1>
   <a href="add.php">Tambah Data</a>
   <table border="1">
     <tr>
       <th>No</th>
       <th>NIM</th>
       <th>Nama</th>
       <th>Program Studi</th>
       <th>Semester</th>
       <th>Aksi</th>
     </tr>
     <?php
      $no = 1;
      while ($row = $result->fetch_assoc()):
      ?>
       <tr>
         <td><?= $no++; ?></td>
         <td><?= $row['nim']; ?></td>
         <td><?= $row['nama']; ?></td>
         <td><?= $row['prodi']; ?></td>
         <td><?= $row['semester']; ?></td>
         <td>
           <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
           <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">Hapus</a>
         </td>
       </tr>
     <?php endwhile; ?>
   </table>
 </body>

 </html>