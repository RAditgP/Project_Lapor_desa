<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiDesaController extends Controller
{
    public function index()
    {
        return view('layanan.informasi-desa');
    }
}
