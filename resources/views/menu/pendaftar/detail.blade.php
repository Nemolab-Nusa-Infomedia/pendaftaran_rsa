@extends('components.layout')


@section('content')
<div class="row mx-auto">
    <div class="card p-2">
        <span class="fs-5 fw-bold">Vindra Arya Yulian</span>
        <div class="d-flex align-items-center justify-content-between">
            <span class="text-secondary fw-bold">Dewasa</span>
            <button type="button" class="btn btn-c9 text-white">Accept</button>
        </div>
        <div class="border-bottom border-dark mt-3"></div>
        <div class="table-responsive mt-3">
            <table width="100%">
                <span class="fw-bold border-bottom border-dark">Pasien</span>
                <tr>
                    <td class="text-secondary">Nama Lengkap Pasien</td>
                    <td class="fw-bold">: Vindra Arya Yulian</td>
                </tr>
                <tr>
                    <td class="text-secondary">Kriteria Pasien</td>
                    <td class="fw-bold">: Dewasa</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nomor Telepon Pasien</td>
                    <td class="fw-bold">: 083104788904</td>
                </tr>
                <tr>
                    <td class="text-secondary">Alamat</td>
                    <td class="fw-bold">: Jl. Kenanga Grendeng RT 02/01</td>
                </tr>
                <tr>
                    <td class="text-secondary">Kota/Kecamatan</td>
                    <td class="fw-bold">: Purwokerto Utara</td>
                </tr>
                <tr>
                    <td class="text-secondary">Provinsi</td>
                    <td class="fw-bold">: Jawa Tengah</td>
                </tr>
                <tr>
                    <td class="text-secondary">Tanggal Masuk</td>
                    <td class="fw-bold">: 25 Juli 2024</td>
                </tr>
                <tr>
                    <td class="text-secondary">Tanggal Keluar</td>
                    <td class="fw-bold">: 25 Juli 2024</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nama Lengkap Pendamping</td>
                    <td class="fw-bold">: Feliza Anindya Rahma Putri</td>
                </tr>
                <tr>
                    <td class="text-secondary">Nomor Telepon Pendamping</td>
                    <td class="fw-bold">: 083104788904</td>
                </tr>
            </table>

            <div class="d-flex border border-2 rounded-3 mt-4 p-1 gap-2" style="width: 100%">
                <button type="button" id="btnPasien" class="btn btn-c8 text-dark fw-bold d-flex align-items-center text-center" style="width: 50%; font-size: 12px">Lampiran Pasien</button>
                <button type="button" id="btnPendamping" class="btn text-dark fw-bold d-flex align-items-center text-center" style="width: 50%; font-size: 12px">Lampiran Pendamping</button>
            </div>

            {{-- lampiran pasien --}}
            <div id="lampiranPasien" class="row col-12 col-md-12 mx-auto mt-3">
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto KTP Pasien</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto Terbaru Pasien</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto Kartu Keluarga</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto Surat Rujukan RS/Dokter</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto BPJS Kelas 3</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto SKM (Bila Ada)</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>

            </div>

            {{-- Lampiran Pendamping --}}
            <div id="lampiranPendamping" class="row col-12 col-md-12 mx-auto mt-3 d-none">
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto KTP Pendamping</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <span>Foto Terbaru Pendamping</span>
                        <img src="{{ asset('assets/img/test.jpg') }}" style="width: 300px" alt="">
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
