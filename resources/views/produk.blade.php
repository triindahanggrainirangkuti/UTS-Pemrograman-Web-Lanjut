<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">UTS Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produk">Produk</a>
        </li>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Halaman Produk</h1>

    <table class="table table-sm table-striped">
      <thead>
        <tr>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td>BRG001</td>
          <td>Pena</td>
          <td>Alat tulis</td>
          <td>20000</td>
        </tr>
        <tr>
          <td>BRG002</td>
          <td>Buku</td>
          <td>Alat tulis</td>
          <td>15000</td>
        </tr>
      </tbody>
    </table>
</div>
<div class= "col-sm-6">
  <h4>Form Tambah Produk</h4>
  <form action="" method="GET">
    <div class="row">
      <div class="col-sm-6">
        <label for="">Kode Produk</label>
        <input type="text" name="kode produk" class="form-control" placeholder="Input Kode Produk">
      </div>
      <div class="col-sm-6">
        <label for="">Nama Produk</label>
        <input type="text" name="nama produk" class="form-control" placeholder="Input Nama Produk">
      </div>
      <div class="col-sm-6">
      <label for="">Jenis Produk</label>
      <select name="jenis produk" class="form-control">
        <option>Pilih Produk</option>
        <option>Alat tulis</option>
        <option>Elektronik</option>
        <option>Sembako</option>
</select>
    </div>
    </div>

    <div class="row" mt-2>
      <div class="col-sm-12">
        <label for="">Harga</label>
        <input type="" name="harga" class="form-control" placeholder="Input Harga">
      </div>
      </div>
      <div class="form-group mt-2">
        <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
      </div>
  </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>