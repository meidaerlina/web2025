<?php
session_start();
if (isset($_SESSION{'login'})) {
    echo $_SESSION['login'];
   // header("location: login.html");
}
include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.nama AS NamaProdi
    FROM mahasiswa
    LEFT JOIN prodi ON mahasiswa.ID = prodi.id";
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
            <th>Id </th>
            <th>prodi</th>
            <th>Aksi</th>
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
                <td><?php echo $d["ID"] ?></td>
                <td><?php echo $d["NamaProdi"] ?></td>
                <td>
                    <a href="deletemahasiswa.php?nim=<?= $d['Nim'] ?>"onclick="return confirm('bisa lah?')">Delete</a> |
                    <a href="editmahasiswa.php?nim=<?= $d['Nim'] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
        </table>
      <a href="logout.php">Keluar</a>  
</body>
</html>