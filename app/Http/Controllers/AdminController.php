<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function destroy(Patient $patient){
        if($patient->foto_ktp_pasien){
            Storage::delete('public/'.$patient->foto_ktp_pasien);
        }
        if($patient->foto_ktp_pasien){
            Storage::delete('public/'.$patient->foto_terbaru_pasien);
        }
        if($patient->foto_kk){
            Storage::delete('public/'.$patient->foto_kk);
        }
        if($patient->foto_surat_rujukan){
            Storage::delete('public/'.$patient->foto_surat_rujukan);
        }
        if($patient->foto_bpjs_kelas_tiga){
            Storage::delete('public/'.$patient->foto_bpjs_kelas_tiga);
        }
        if($patient->foto_skm){
            Storage::delete('public/'.$patient->foto_skm);
        }
        if($patient->foto_berbaru_pendamping){
            Storage::delete('public/'.$patient->foto_terbaru_pendamping);
        }
        if($patient->foto_ktp_pendamping){
            Storage::delete('public/'.$patient->foto_ktp_pendamping);
        }
        $patient->delete();
        return back()->with('success', 'Data Pasien Berhasil Dihapus !');
    }
}
