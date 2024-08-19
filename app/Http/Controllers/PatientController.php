<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Exports\PatientExport;
use App\Helpers\FileImageHelper;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StorePatientRequest;

class PatientController extends Controller
{
    public function formPendaftaran(){
        return view('form.form-pendaftaran',[
            'title' => 'Form Pendaftaran'
        ]);
    }
    public function pendaftaranBerhasil(){
        return view('form.notification.pendaftaran-berhasil',[
            'title' => 'Pendaftaran Berhasil'
        ]);
    }
    public function pendaftaranGagal(){
        return view('form.notification.pendaftaran-gagal',[
            'title' => 'Pendaftaran Gagal'
        ]);
    }
    public function store(StorePatientRequest $request){
        try {
            $data = $request->validated();
            if($request->hasFile('foto_ktp_pasien')){
                $data['foto_ktp_pasien'] = $request->file('foto_ktp_pasien')->storeAs('idcard_patient', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_ktp_pasien')), 'public');
            }
            if($request->hasFile('foto_terbaru_pasien')){
                $data['foto_terbaru_pasien'] = $request->file('foto_terbaru_pasien')->storeAs('newest_image_patient', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_terbaru_pasien')), 'public');
            }
            if($request->hasFile('foto_kk')){
                $data['foto_kk'] = $request->file('foto_kk')->storeAs('family_card_patient', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_kk')), 'public');
            }
            if($request->hasFile('foto_skm')){
                $data['foto_skm'] = $request->file('foto_skm')->storeAs('skm_image', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_skm')), 'public');
            }
            if($request->hasFile('foto_surat_rujukan')){
                $data['foto_surat_rujukan'] = $request->file('foto_surat_rujukan')->storeAs('refference_letter', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_surat_rujukan')), 'public');
            }
            if($request->hasFile('foto_bpjs_kelas_tiga')){
                $data['foto_bpjs_kelas_tiga'] = $request->file('foto_bpjs_kelas_tiga')->storeAs('bpjs_kelas_tiga', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_bpjs_kelas_tiga')), 'public');
            }
            if($request->hasFile('foto_terbaru_pendamping')){
                $data['foto_terbaru_pendamping'] = $request->file('foto_terbaru_pendamping')->storeAs('newest_image_companion', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_terbaru_pendamping')), 'public');
            }
            if($request->hasFile('foto_ktp_pendamping')){
                $data['foto_ktp_pendamping'] = $request->file('foto_ktp_pendamping')->storeAs('idcard_companion', FileImageHelper::generateFileName($data['nama_lengkap_pasien'], $request->file('foto_ktp_pendamping')), 'public');
            }
            $patient = Patient::create($data);
            Mail::send('menu.pendaftar.sent-email.index', ['patient' => $patient], function ($message) use ($patient) {
                        $message->to(env('EMAIL_ADMIN'));
                        $message->subject('Email Pemberitahuan Pendaftar Baru');
                    });
            return redirect()->route('pendaftaran-berhasil')->with('success', 'Data Pasien Berhasil Dikirim !');
        } catch (\Exception $e) {
            Log::error('Error occurred while sending data: ' . $e->getMessage(), [
                'exception' => $e
            ]);
            return redirect()->route('pendaftaran-gagal')->with('error', 'Terjadi kesalahan saat mengirim data!');
        }
    }
    public function acceptPatient(Patient $patient){
        $patient->update([
            'is_accepted' => 1
        ]);
        return back()->with('success', 'Pendaftar berhasil disetujui');
    }

    public function exportExcel() {
        return Excel::download(new PatientExport, 'datapatient.xlsx');
    }

    public function exportPdf() {
        Carbon::setLocale('id');
        $now = Carbon::now();
        $formattedDate = $now->timezone('Asia/Jakarta')->translatedFormat('d F Y H:i:s');

        ob_start(); // Mulai output buffering

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('menu.pendaftar.patient-pdf', [
            'patient' => Patient::all(),
            'tanggal' => $formattedDate
        ]));

        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Bersihkan output buffering
        ob_end_clean();

        // Menambahkan header HTTP secara eksplisit
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="datapatient.pdf"');

        $dompdf->stream('datapatient.pdf', ["Attachment" => true]);

        exit();
    }
}
