<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index(){
        return view('menu.pendaftar.index',[
            'title' => 'Pendaftaran'
        ]);
    }

    public function formPendaftaran(){
        return view('menu.pendaftar.form-pendaftaran',[
            'title' => 'Form Pendaftaran'
        ]);
    }

    public function pendaftaranBerhasil(){
        return view('menu.pendaftar.notification.pendaftaran-berhasil',[
            'title' => 'Pendaftaran Berhasil'
        ]);
    }

    public function pendaftaranGagal(){
        return view('menu.pendaftar.notification.pendaftaran-gagal',[
            'title' => 'Pendaftaran Gagal'
        ]);
    }
}
