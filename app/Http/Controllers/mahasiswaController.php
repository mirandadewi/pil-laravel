<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Halaman Home Mahasiswa
        return view('Mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Halaman tambah mahasiswa
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Halaman proses simpan tambah

        Session::flash('npm',$request->npm);
        Session::flash('nama',$request->nama);
        Session::flash('tgl_lahir',$request->tgl_lahir);
        Session::flash('alamat',$request->alamat);

        $request->validate(
            [
            'npm' => 'required|numeric|unique:mahasiswa,npm',
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'

            ],
            [
                'npm.required'  =>'NPM tidak boleh kosong!',
                'npm.numeric'   =>'NPM harus diisi dengan bentuk angka',
                'npm.unique'   =>'NPM sudah ada sebelumnya',
                'nama.required'  =>'Nama tidak boleh kosong!',
                'jk.required'  =>'Jenis Kelamin tidak boleh kosong!',
                'tgl_lahir.required'  =>'Tanggal Lahir tidak boleh kosong!',
                'alamat.required'  =>'Alamat tidak boleh kosong!'

            ]
    
    
        );

        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success','Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //halaman detail
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //halaman edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //proses simpan edit
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //proses hapus
    }
}
