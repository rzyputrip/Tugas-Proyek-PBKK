<?php

namespace App\Http\Controllers; // Mendefinisikan namespace dari kontroler

use Illuminate\Http\Request; // Mengimpor kelas Request dari framework Laravel

class BioController extends Controller // Deklarasi kelas BioController yang meng-extend (mewarisi) kelas Controller
{
    public function daftar() // Fungsi daftar() untuk menampilkan halaman pendaftaran
    {
        return view('Page.biodata'); // Mengembalikan tampilan (view) dengan nama 'Page.biodata'
    }

    public function submit(Request $request) // Fungsi submit() untuk mengelola data yang dikirimkan melalui permintaan HTTP
    {
       $namaDepan = $request['fname']; // Mengambil nilai 'fname' dari permintaan HTTP dan menyimpannya dalam variabel $namaDepan
       $namaBelakang = $request['lname']; // Mengambil nilai 'lname' dari permintaan HTTP dan menyimpannya dalam variabel $namaBelakang

       return view('Page.welcome', ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]); // Mengembalikan tampilan 'Page.welcome' dengan data $namaDepan dan $namaBelakang yang akan digunakan dalam tampilan tersebut
    }
}
