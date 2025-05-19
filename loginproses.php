<?php
session_start();
include "koneksi.php";
$Nim = $_POST['Nim'];
$Password = $_POST['Password'];

$query = "SELECT * FROM mahasiswa WHERE Nim='$Nim'";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil);


if (password_verify($Password, $data['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['Nama'] = $data['Nama'];
    $_SESSION['foto'] = $data['foto'];

    header("location: index.php");
} else {
    header("location: login.html");
}
