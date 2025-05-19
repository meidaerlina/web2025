<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "SELECT * FROM prodi";
$data = ambildata($query);

include "template/hider.php";
include "template/sidebar.php";
?>
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <!-- Start col -->
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa</h3>
                        </div>
                        <form action="tambahaksimahasiswa.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <form action="tambahaksimahasiswa.php" method="post">
                                    <div class="form-group">
                                        <label for="Nim">NIM</label>
                                        <input type="text" name="Nim" id="Nim" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" name="password" id="pasword" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Nama Mahasiswa</label>
                                        <input type="text" name="Nama" id="Nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Tanggallahir">Tanggal lahir</label>
                                        </label>
                                        <input type="date" name="Tanggallahir" id="Tanggallahir" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Telp">No telp</label>
                                        <input type="text" name="Telp" id="Telp" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" name="Email" id="Email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label form="Id_prodi" class="form-label">prodi</label>
                                        <select class="form-select" name="Id_prodi" id="Id_prodi">
                                            <?php foreach ($data as $d) : ?>
                                                <option value="<?php echo $d["Id_prodi"] ?>"><?php echo $d["nama"] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <table class="form-label" for="foto">Upload foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto" />
                                    </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php" class="btn btn-warning">kembali</a>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<?php
include "template/footer.php";
?>