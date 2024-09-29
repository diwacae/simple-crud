<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "simple_crud";

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
  die("Koneksi gagal: " . $mysqli->connect_error);
} 
// else {
//   echo "Koneksi berhasil";
// }
