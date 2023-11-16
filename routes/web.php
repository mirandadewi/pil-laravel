<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
    //$nama = 'Miranda Dewi';
   // return 'Hello ' . $nama;
   // Menghitung Luas Lingkaran
   // $r = 15;
   // $phi = 3.14;
   // $luas_lingkaran = ($r * $r) * $phi;
   // return 'Luas Lingkaran dengan jumlah jari - jari = ' .$r . ' Hasilnya adalah ' .$luas_lingkaran;

   //Perbandingan
   //$nama = 'Miranda Dewi';
   //$kelas = 'A1';
   //$prodi = 'Teknologi Informasi';
   //return ' Nama saya <b>  '.$nama . '</b> dari kelas <b>' .$kelas . ' </b> prodi <b>' .$prodi ;

//});

Route::get('/', function () {
  return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = ' Miranda Dewi';
    //return view('profile' ,compact('nama') );
    return view('profile')->with( 'nama' , $nama);
});

Route::get('table', function () {
    $Nama = ['Haechan', 'Ruhi', 'Bunga'];
    $NPM = ['127', '098', '192'];
    $jenis_kelamin =['Laki Laki', 'Perempuan', 'Perempuan'];
    $tanggal_lahir =['6 juni 2003', '5 oktober 2002', '3 februari 2001'];
    $alamat =['Seoul', 'Jogja', 'Bali'];
    $jumlah = count($alamat);
    return view('pertemuan5/tabel')->with([
        'Nama' => $Nama,
        'NPM' => $NPM,
        'jenis_kelamin' => $jenis_kelamin,
        'tanggal_lahir' => $tanggal_lahir,
        'alamat' => $alamat,
        'count' => $jumlah
    ]);
 });

 Route::get('array', function () {
    // //infinitife loop
    // $nilai_awal =1;
    // while ($nilai_awal <=5) {
    //   echo 'Hello Laravel' . $nilai_awal. 'x<br>';
    //   $nilai_awal++;
    // }
    for ($i = 0; $i < 10; $i++) {
        echo 'Hello Laravel' . $i . 'x<br>';
    }
});
