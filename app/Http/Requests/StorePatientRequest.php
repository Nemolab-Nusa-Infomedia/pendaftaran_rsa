<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required|string',
            'kriteria_pasien' => 'required',
            'alamat' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
            'foto_ktp_pasien' => 'required',
            'foto_terbaru_pasien' => 'required',
            'foto_kk' => 'required',
            'foto_surat_rujukan' => 'required',
            'foto_bpjs_kelas_tiga' => 'required',
            'nama_lengkap_pendamping' => 'required',
            'nomor_telepon_pendamping' => 'required',
            'foto_terbaru_pendamping' => 'required',
            'foto_ktp_pendamping' => 'required'
        ];
    }

    public function message(): array {
         return [
            'name.required' => 'Nama lengkap belum diisi',
            'kriteria_pasien.required' => 'Pilih kriteria pasien',
            'alamat.required' => 'Alamat belum diisi',
            'tanggal_masuk.required' => 'Tanggal masuk belum diisi',
            'tanggal_keluar.required' => 'Tanggal keluar belum diisi',
            'foto_ktp_pasien.required' => 'Foto KTP pasien belum diisi',
            'foto_terbaru_pasien.required' => 'Foto terbaru pasien belum diisi',
            'foto_kk.required' => 'Foto Kartu Keluarga (KK) belum diisi',
            'foto_surat_rujukan.required' => 'Foto surat rujukan belum diisi',
            'foto_bpjs_kelas_tiga.required' => 'Foto surat bpjs kelas 3 belum diisi',
            'nama_lengkap_pendamping.required' => 'Nama lengkap pendamping belum diisi',
            'nomor_telepon_pendamping.required' => 'Nomor telepon pendamping belum diisi',
            'foto_terbaru_pendamping.required' => 'Foto terbaru pendamping belum diisi',
            'foto_ktp_pendamping.required' => 'Foto KTP pendamping belum diisi'
        ];
    }
}
