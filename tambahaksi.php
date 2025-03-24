<?php
include "koneksi.php";

$Nim = $_POST["Nim"];
$Nama = $_POST["Nama"];
$Tanggallahir = $_POST["Tanggallahir"];
$Telp = $_POST["Telp"];
$Email = $_POST["Email"];
$Id_prodi = $_POST["Id_prodi"];


$query = "INSERT INTO mahasiswa (Nim, Nama, Tanggallahir, Telp, Email, ID) VALUES ('$Nim','$Nama',
 '$Tanggallahir', '$Telp','$Email', '$Id_prodi')"; 

 mysqli_query($conn, $query);

 header("location:index.php");
?>
 