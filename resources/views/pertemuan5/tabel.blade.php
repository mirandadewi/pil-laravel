<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">UTS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Beranda</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Produk">Produk</a>
                </li>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>

<h1>Halaman Tabel</h1>
<table class="table">

<thead>
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Harga Produk</th>
    </tr>
</thead>
<tbody>
    @for ($i = 0; $i < $count; $i++)
        <tr>
            <td>{{$kode_produk[$i]}}</td>
            <td>{{$Nama_produk[$i]}}</td>
            <td>{{$Jenis_produk[$i]}}</td>
            <td>{{$Harga_produk[$i]}}</td>
        </tr>
    @endfor
    {{-- @for ($i = 0; $i < $count; $i++) 
    <tr>
        <td> {{$NPM [$i]}}</td>
        <td> {{$Nama[$i]}}</td>
        <td> {{$jenis_kelamin[$i]}}</td>
        <td> {{$tanggal_lahir[$i]}}</td>
        <td> {{$alamat[$i]}}</td>
    </tr>
    @endfor  --}} 
    {{-- <table class="table">
        <thead>
            <th coldspan ="3"></th>
            <td rowspan="3"></td>
        <tr>
            <th>A</th>
            <th>B</th>
        </tr>
        <tr>
        <td>C</td>
        <th>D</th>
        <th>E</th>
    </tr>
        <tr>
        <td>F</td>
    </tr> --}}
    
    <!-- <tr>
        <td> 098</td>
        <td> Ruhi</td>
        <td> Perempuan</td>
        <td> 11 juni 2001</td>
        <td> Jogja</td>
    </tr>
    <tr>
        <td> 112</td>
        <td> Bunga</td>
        <td> Perempuan</td>
        <td> 20 November 2002</td>
        <td> Bali</td>
    </tr> -->
</thead>
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>