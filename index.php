<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA<h1>
    <br>
    <a href="tambahmahsiswa.php">tambah</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telp</th>
            <th>Email </th>
        </thead>
        <tbody>

        <?php
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["Nim"] ?></td>
                <td><?php echo $d["Nama"] ?></td>
                <td><?php echo $d["Tanggallahir"] ?></td>
                <td><?php echo $d["Telp"] ?></td>
                <td><?php echo $d["Email"] ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>