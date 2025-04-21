<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);
$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);

$datamahasiswa = $datamahasiswa[0];
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
    <form action="editaksimahasiswa.php" method="post">
        <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="Nim" required value ="<?=
            $datamahasiswa['Nim']; ?>"readonly></td>
        <tr>
            <td>Nama</td>
            <td><input type="text"name="Nama" required value ="<?=
            $datamahasiswa['Nama']; ?>"readonly></td>
        <tr>
            <td>Tanggal lahir</td>
            <td><input type="date" name="Tanggallahir" required value ="<?=
            $datamahasiswa['Tanggallahir']; ?>"readonly></td>
            
        <tr>
            <td>Telp</td>
            <td><input type="text"name="Telp" required value ="<?=
            $datamahasiswa['Telp']; ?>"readonly></td>
        <tr>
            <td>Email</td>
            <td><input type="Email"name="Email" required value ="<?=
            $datamahasiswa['Email']; ?>"readonly></td>
            
        <tr>
            <td>Prodi</td>
            <td>
                <select name="ID">
                    <?php foreach ($data as $d) : ?>
                    <option value="<?php echo $d["id"] ?>"
                    <?=
                    $d['id'] == $datamahasiswa['ID'] ?
                    "SELECTED" : ""
                    ?>
                    ><?php echo $d['nama'] ?></option>
                    <?php endforeach ?>
                 </select>  
             </td>
        </tr>
</table>
<a href="index.php">kembali</a>
<button type="submit">simpan</button>    
</body>
</html>