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
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel A1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">about</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">

    <div class="row">
      <div class="col-sm-8">
      <h1>Halaman Mahasiswa</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        @if (Session::has('success'))
        {{-- <div class="pt-3">
          <div class="alert alert-success">
            {{ Session::get('success')}}
          </div>
        </div>  --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully!</strong>{{Session::get('success')}}.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    {{-- //row = Baris
    //Col = Kolom --}}
    <div class ="row">
      <div class="col-sm-12">
        <h4>Tabel Mahasiswa</h4>
        <table class="table table-danger table-sm table-hover table-striped table-border text-center">
          <thead>
        <tr>
          <th>No</th>
          <th>NPM</th>
          <th>Nama Mahasiswa</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
        </tr>
          </thead>
          <tbody>
        @foreach ($Mahasiswa as $d)
        <tr>
          <td>{{ $no++}}</td>
          <td>{{ $d->npm }}</td>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->jk }}</td>
          <td>{{ $d->tgl_lahir}}</td>
          <td>{{ $d->alamat }}</td>
        </tr>
            
        @endforeach
        
      </tbody>
    </table>
      </div>
    </div>
    <div class="col-sm-4 mt-2" style="text-align: right, widht:right">
      <a href="/Mahasiswa/create" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>