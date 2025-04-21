<?php
include "koneksi.php";

$nim = $_POST["Nim"];
$nama = $_POST["Nama"];
$tanggal_lahir = $_POST["Tanggallahir"];
$no_telp = $_POST["Telp"];
$email = $_POST["Email"];
$ID = $_POST["ID"];


$query = "UPDATE mahasiswa SET nama = '$nama' , Tanggallahir ='$tanggal_lahir', Telp 
= '$no_telp' , email = '$email' , ID = '$ID' WHERE nim ='$nim'";

mysqli_query($conn, $query);

header("location:index.php");
?>