<?php

namespace App\Http\Controllers; // Mendefinisikan namespace dari kontroler

use Illuminate\Http\Request; // Mengimpor kelas Request dari framework Laravel

class IndexController extends Controller // Deklarasi kelas IndexController yang meng-extend (mewarisi) kelas Controller
{
    public function dashboard() // Fungsi dashboard() untuk menampilkan halaman dashboard
    {
        return view('Page.index'); // Mengembalikan tampilan (view) dengan nama 'Page.index'
    }
}
