<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksi.php" method="post">
        <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="Nim"></td>
        <tr>
            <td>Nama</td>
            <td><input type="text"name="Nama"></td>
        <tr>
            <td>Tanggal lahir</td>
            <td><input type="date"name="Tanggallahir"></td>
            
        <tr>
            <td>Telp</td>
            <td><input type="text"name="Telp"></td>
        <tr>
            <td>Email</td>
            <td><input type="email"name="Email"></td>
            
        <tr>
            <td>Prodi</td>
            <td>
                <select name="Id_prodi">
                    <?php foreach ($data as $d) : ?>
                    <option value= <?= $d['id'] ?> > <?= $d['nama'] ?> </option>
                    <?php endforeach ?>
                 </select>  
             </td>
        </tr>
</table>
<a href="index.php">kembali</a>
<button type="submit">simpan</button>    
</body>
</html>