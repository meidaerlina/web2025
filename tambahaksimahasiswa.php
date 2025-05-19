<?php
session_start();
include "koneksi.php";
ceklogin();

$Nim = $_POST["Nim"];
$password = $_POST["password"];
$Nama = $_POST["Nama"];
$Tanggallahir = $_POST["Tanggallahir"];
$Telp = $_POST["Telp"];
$Email = $_POST["Email"];
$Id_prodi = $_POST["Id_prodi"];

$namafile = $_FILES['foto']['name'];
$tmpname = $_FILES['foto']['tmp_name'];

$ekstensifoto = explode('.', $namafile);
$ekstensifoto = strtolower(end($ekstensifoto));

$namaFileBaru = $Nim;
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensifoto;

move_uploaded_file($tmpname, 'assets/img/' . $namaFileBaru);

$hashpass = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO mahasiswa (Nim, Nama, Tanggallahir, Telp, Email, Id_prodi, password, foto)
VALUES ('$Nim','$Nama','$Tanggallahir', '$Telp','$Email', '$Id_prodi','$hashpass', '$namaFileBaru')";

// var_dump($query);
// die;

mysqli_query($conn, $query);

header("location:index.php");
