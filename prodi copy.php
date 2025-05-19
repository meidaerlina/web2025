<?php
session_start();
if (isset($_SESSION['login'])) {
    echo $_SERVER['login'];
    //header("Location; login.html");
}

include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

include "template/hider.php";
include "template/sidebar.php";
?>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Prodi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Data Prodi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id_prodi</th>
                                <th>nama</th>
                                <th>kaprodi</th>
                                <th>jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data as $d) : ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $d["id_prodi"] ?></td>
                                    <td><?php echo $d["nama"] ?></td>
                                    <td><?php echo $d["kaprodi"] ?></td>
                                    <td><?php echo $d["jurusan"] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
    </div>