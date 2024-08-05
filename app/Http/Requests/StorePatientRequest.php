<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'nama_lengkap_pasien' => 'required|string',
            'nomor_telepon_pasien' => 'required|numeric',
            'kriteria_pasien' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'provinsi' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
            'foto_ktp_pasien' => 'required|image',
            'foto_terbaru_pasien' => 'required|image',
            'foto_kk' => 'required|image',
            'foto_surat_rujukan' => 'required|image',
            'foto_bpjs_kelas_tiga' => 'required|image',
            'foto_skm' => 'nullable|image',
            'nama_lengkap_pendamping' => 'required',
            'nomor_telepon_pendamping' => 'required',
            'foto_terbaru_pendamping' => 'required|image',
            'foto_ktp_pendamping' => 'required|image'
        ];
    }

    public function messages(): array {
         return [
            'nama_lengkap_pasien.required' => 'Nama lengkap belum diisi',
            'nomor_telepon_pasien.required' => 'Nomor telepon belum diisi',
            'kriteria_pasien.required' => 'Pilih kriteria pasien',
            'alamat.required' => 'Alamat belum diisi',
            'kecamatan.required' => 'Kecamatan belum diisi',
            'provinsi.required' => 'Provinsi belum diisi',
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
