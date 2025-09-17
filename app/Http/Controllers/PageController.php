<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function pengumuman()
    {
        return view('pengumuman');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function profil()
    {
        return view('profil');
    }
}