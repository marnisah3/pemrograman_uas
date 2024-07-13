<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #f0f2f5;
    }
    .btn-custom {
      background-color: #007bff;
      color: #fff;
      border: 1px solid #007bff;
    }
    .btn-custom:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control {
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Data Dosen</h1>
    
    <?php if (! empty(session()->getFlashdata('message'))) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul class="mb-0">
        <?php foreach (session()->getFlashdata('message') as $error) : ?>
        <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif ?>

    <a href="<?= route_to('Dosen::list') ?>" class="btn btn-md btn-custom mb-3">Kembali</a>

    <div class="card">
      <div class="card-header text-center">
        Formulir Tambah Data Dosen
      </div>
      <div class="card-body">
        <form method="post" action="<?= route_to('Dosen::simpan') ?>">
          <div class="mb-3">
            <label for="Nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" name="Nama_dosen" id="Nama_dosen" class="form-control">
          </div>

          <div class="mb-3">
            <label for="Alamat_dosen" class="form-label">Alamat Dosen</label>
            <input type="Alamat_dosen" name="Alamat_dosen" id="Alamat_dosen" class="form-control">
          </div>

          <div class="mb-3">
            <label for="Matkul" class="form-label">Mata Kuliah</label>
            <input type="text" name="Matkul" id="Matkul" class="form-control">
          </div>

          <button type="submit" class="btn btn-custom btn-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
