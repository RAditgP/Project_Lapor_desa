<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan; // pastikan modelnya ada

class AdminKegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->get();
        return view('admin.kegiatan.index', compact('kegiatans'));
    }
}
