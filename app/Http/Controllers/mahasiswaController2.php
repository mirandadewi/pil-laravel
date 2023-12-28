<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    function index(){
        return view('Mahasiswa');
    }

    function home(){
        return view('Home');
    }
}
