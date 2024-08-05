<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $patient = Patient::where('is_accepted', true)->paginate(15);
        return view('menu.pendaftar.index', compact('patient'),[
            'title' => 'Pendaftaran',
        ]);
    }

    public function detail(Patient $patient){
        return view('menu.pendaftar.detail', compact('patient'),[
            'title' => 'Detail Pendaftar'
        ]);
    }
}
