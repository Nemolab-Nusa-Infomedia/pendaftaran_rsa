<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDonasiController extends Controller
{
    public function index(){
        return view('menu.donasi.form-donasi.index');
    }
}
