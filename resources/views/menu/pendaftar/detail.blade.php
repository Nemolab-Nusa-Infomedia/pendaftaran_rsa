@extends('components.layout')


@section('content')
@php
function formatPhoneNumber($phoneNumber) {
    if (!empty($phoneNumber) && $phoneNumber[0] == '0') {
        return '62' . substr($phoneNumber, 1);
    }
    return $phoneNumber;
}
@endphp
<div class="row mx-auto">
    <div class="card p-2 card-detail">
        <span class="fs-5 fw-bold">{{ $patient->nama_lengkap_pasien }}</span>
        <span class="text-secondary fw-bold text-start mb-3">{{ $patient->kriteria_pasien }}</span>
        <div class="d-flex align-items-center justify-content-end gap-3">
            @if($patient->is_accepted == false)            
            <a href="{{ route('tolak-pendaftar', ['patient'=>$patient]) }}" onclick="return confirm('Apakah yakin data pasien ini akan ditolak ?')"><button type="submit" class="btn btn-c4 text-white">Tolak Pendaftaran</button></a>
            <form action="{{ route('accept-patient-pendaftaran', ['patient'=>$patient]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-c7 text-white">Setujui Pendaftaran</button>
            </form>
            @else
                <button type="submit" class="btn btn-c3 text-white">Sudah Disetujui</button>
            @endif
        </div>
        <div class="border-bottom border-dark mt-3"></div>
        <div class="table-responsive mt-3">
            <table class="table table-detail" width="100%">
                <span class="fw-bold border-bottom border-dark">Pasien</span>
                <tr>
                    <td class="text-secondary">Nama Lengkap Pasien</td>
                    <td class="fw-bold">: {{ $patient->nama_lengkap_pasien }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Kriteria Pasien</td>
                    <td class="fw-bold">: {{ $patient->kriteria_pasien }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nomor Telepon Pasien</td>
                    <td class="fw-bold">: {{ $patient->nomor_telepon_pasien }} <a href="https://wa.me/{{ formatPhoneNumber($patient->nomor_telepon_pasien)}}?text={{ urlencode('Halo dengan Bapak/Ibu/Saudara/i '. $patient->nama_lengkap_pasien. '?') }}"  target="_blank"><i class="fa-brands fa-square-whatsapp text-c3"></i> Chat via Whatsapp</a></td>
                </tr>
                <tr>
                    <td class="text-secondary">Alamat</td>
                    <td class="fw-bold">: {{ $patient->alamat }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Kota/Kecamatan</td>
                    <td class="fw-bold">: {{ $patient->kecamatan }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Provinsi</td>
                    <td class="fw-bold">: {{ $patient->provinsi }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Tanggal Masuk</td>
                    <td class="fw-bold">: {{ $patient->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Tanggal Keluar</td>
                    <td class="fw-bold">: {{ $patient->tanggal_keluar }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nama Lengkap Pendamping</td>
                    <td class="fw-bold">: {{ $patient->nama_lengkap_pendamping }}</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nomor Telepon Pendamping</td>
                    <td class="fw-bold">: {{ $patient->nomor_telepon_pendamping }} <a href="https://wa.me/{{ formatPhoneNumber($patient->nomor_telepon_pendamping)}}?text={{ urlencode('Halo dengan Bapak/Ibu/Saudara/i '. $patient->nama_lengkap_pendamping. '?') }}" target="_blank"><i class="fa-brands fa-square-whatsapp text-c3"></i> Chat via Whatsapp</a></td>
                </tr>
            </table>

            <div class="d-flex border border-2 rounded-3 mt-4 p-1 gap-2" style="width: 100%">
                <button type="button" id="btnPasien" class="btn btn-c8 text-dark fw-bold d-flex align-items-center text-center" style="width: 50%; font-size: 12px">Lampiran Pasien</button>
                <button type="button" id="btnPendamping" class="btn text-dark fw-bold d-flex align-items-center text-center" style="width: 50%; font-size: 12px">Lampiran Pendamping</button>
            </div>

            {{-- lampiran pasien --}}
            <div id="lampiranPasien" class="row col-12 col-md-12 mx-auto mt-3">
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto KTP Pasien</span>
                        <img src="{{ asset('storage/'. $patient->foto_ktp_pasien) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto Terbaru Pasien</span>
                        <img src="{{ asset('storage/'. $patient->foto_terbaru_pasien) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto Kartu Keluarga</span>
                        <img src="{{ asset('storage/'. $patient->foto_kk) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto Surat Rujukan RS/Dokter</span>
                        <img src="{{ asset('storage/'. $patient->foto_surat_rujukan) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto BPJS Kelas 3</span>
                        <img src="{{ asset('storage/'. $patient->foto_bpjs_kelas_tiga) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto SKM (Bila Ada)</span>
                        <img src="{{ asset('storage/'. $patient->foto_skm) }}" style="width: 330px" alt="">
                    </div>
                </div>

            </div>

            {{-- Lampiran Pendamping --}}
            <div id="lampiranPendamping" class="row col-12 col-md-12 mx-auto mt-3 d-none">
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto KTP Pendamping</span>
                        <img src="{{ asset('storage/'. $patient->foto_ktp_pendamping) }}" style="width: 330px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xl-3">
                    <div class="row mb-3">
                        <span>Foto Terbaru Pendamping</span>
                        <img src="{{ asset('storage/'. $patient->foto_terbaru_pendamping) }}" style="width: 330px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnPasien = document.getElementById('btnPasien');
        const btnPendamping = document.getElementById('btnPendamping');
        const lampiranPasien = document.getElementById('lampiranPasien');
        const lampiranPendamping = document.getElementById('lampiranPendamping');

        btnPasien.addEventListener('click', function() {
            btnPasien.classList.add('btn-c8');
            btnPasien.classList.remove('btn-light'); // Ganti dengan kelas default yang diinginkan
            btnPendamping.classList.remove('btn-c8');
            btnPendamping.classList.add('btn-light'); // Ganti dengan kelas default yang diinginkan
            lampiranPasien.classList.remove('d-none');
            lampiranPendamping.classList.add('d-none');
        });

        btnPendamping.addEventListener('click', function() {
            btnPendamping.classList.add('btn-c8');
            btnPendamping.classList.remove('btn-light'); // Ganti dengan kelas default yang diinginkan
            btnPasien.classList.remove('btn-c8');
            btnPasien.classList.add('btn-light'); // Ganti dengan kelas default yang diinginkan
            lampiranPendamping.classList.remove('d-none');
            lampiranPasien.classList.add('d-none');
        });
    });
</script>
@endsection
