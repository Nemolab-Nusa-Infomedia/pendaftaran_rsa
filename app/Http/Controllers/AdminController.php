<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('menu.pendaftar.index',[
            'title' => 'Pendaftaran'
        ]);
    }

    public function detail(){
        return view('menu.pendaftar.detail',[
            'title' => 'Detail Pendaftar'
        ]);
    }
}
