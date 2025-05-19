<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.html");
}
include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.nama AS NamaProdi
    FROM mahasiswa
    LEFT JOIN prodi ON mahasiswa.Id_prodi = prodi.Id_prodi";
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
          <h3 class="mb-0">Dashboard</h3>
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
              <div class="card-tools">
                <a href="tambahmahsiswa.php" class="btn btn-primary">Tambah</a>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <thead>
                      <th>No</th>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>No Telp</th>
                      <th>Email </th>
                      <th>prodi</th>
                      <th>Aksi</th>

                  </tr>
                  </tbody>
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
                      <td><?php echo $d["NamaProdi"] ?></td>
                      <td><a href="deletemahasiswa.php?nim=<?= $d['Nim'] ?>"
                          onclick="return confirm('bisa lah?')" class="btn btn-danger">Delete</a>
                        <a href="editmahasiswa.php?nim=<?= $d['Nim'] ?>" class="btn btn-warning">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
              </table>
            </div>
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