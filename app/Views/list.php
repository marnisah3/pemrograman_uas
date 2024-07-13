<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #fffacd; /* Light yellow background */
      }
      .navbar {
        background-color: #87CEFA; /* Light blue background */
      }
      .navbar-brand {
        color: #fff;
      }
      .navbar-toggler-icon {
        filter: invert(1);
      }
      .btn-custom {
        background-color: #87CEFA; /* Light blue background */
        border-color: #87CEFA;
        color: #fff;
      }
      .btn-custom:hover {
        background-color: #5a9bd3;
        border-color: #5a9bd3;
      }
      .card {
        border-radius: 0; /* Square corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .table-responsive {
        border-radius: 0; /* Square corners */
        overflow: hidden;
      }
      .table {
        margin-bottom: 0;
      }
      .table thead {
        background-color: #87CEFA; /* Light blue background */
        color: #fff;
      }
      .btn-close {
        filter: invert(1);
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Data Dosen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container mt-5 pt-5">
      <h1 class="text-center mb-4">Daftar Dosen</h1>

      <?php if (! empty(session()->getFlashdata('message'))) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif ?>

      <a href="<?= route_to('Dosen::tambah') ?>" class="btn btn-secondary mb-3">Tambah Data</a>

      <div class="card p-3">
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Nama Dosen</th>
                <th>Alamat Dosen</th>
                <th>Mata Kuliah</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $dosen) : ?>
              <tr>
                <td><?= $dosen['Nama_dosen'] ?></td>
                <td><?= $dosen['Alamat_dosen'] ?></td>
                <td><?= $dosen['Matkul'] ?></td>
                <td class="text-center">
                  <a href="<?= route_to('Dosen::edit', $dosen['id_dosen']); ?>" class="btn btn-dark btn-custom me-2">Edit</a>
                  <a href="<?= route_to('Dosen::hapus', $dosen['id_dosen']); ?>" class="btn btn-dark btn-custom me-2" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                  <a href="<?= route_to('Dosen::hadir', $dosen['id_dosen']); ?>" class="btn btn-dark btn-custom me-2">Hadir</a>
                  <a href="<?= route_to('Dosen::tidak', $dosen['id_dosen']); ?>" class="btn btn-dark btn-custom">Tidak</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
