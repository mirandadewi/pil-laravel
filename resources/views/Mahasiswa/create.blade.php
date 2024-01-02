<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <!-- Navbar content -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-12">                                                                                                                                                                                                                                      
      <h1>Halaman Tambah Mahasiswa</h1>
      <h4>Form Mahasiswa</h4>
      <form action="/Mahasiswa/create" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-sm-4">
            <label for="NPM">NPM</label>
            <input type="number" name="npm" class="form-control" placeholder="NPM">
          </div>
          <div class="col-sm-4">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama">
          </div>
          <div class="col-sm-4">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select">
              <option>L</option>
              <option>P</option>
            </select>
          </div>
          <div class="col-sm-8">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">
              </div>
              <div class="col-sm-6">
                <label for="Alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row g-3">
              <div class="col-sm-6">
                <label></label>
                <button class="btn btn-info" style="width: 100%" type="submit">Simpan</button>
              </div>
              <div class="col-sm-6">
                <label></label>
                <a href="/Mahasiswa" class=" btn btn-danger" style="width: 100%">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>