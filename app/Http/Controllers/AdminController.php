<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $patient = Patient::where('is_accepted', true)->paginate(15);
        return view('menu.pendaftar.index', compact('patient'),[
            'title' => 'Pasien',
            'inner' => 'Data Pasien',
        ]);
    }

    public function detail(Patient $patient){
        $patient->update([
            'is_read' => 1
        ]);
        return view('menu.pendaftar.detail', compact('patient'),[
            'title' => 'Detail Pasien',
            'inner' => 'Detail Pasien ' . $patient->nama_lengkap_pasien,
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
        if($patient->foto_terbaru_pendamping){
            Storage::delete('public/'.$patient->foto_terbaru_pendamping);
        }
        if($patient->foto_ktp_pendamping){
            Storage::delete('public/'.$patient->foto_ktp_pendamping);
        }
        $patient->delete();
        return back()->with('success', 'Data Pasien Berhasil Dihapus!');
    }

    public function destroyFromNotif(Patient $patient){
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
        if($patient->foto_terbaru_pendamping){
            Storage::delete('public/'.$patient->foto_terbaru_pendamping);
        }
        if($patient->foto_ktp_pendamping){
            Storage::delete('public/'.$patient->foto_ktp_pendamping);
        }
        $patient->delete();
        return redirect()->route('notification')->with('success', 'Data Pasien Berhasil Ditolak!');
    }
}
