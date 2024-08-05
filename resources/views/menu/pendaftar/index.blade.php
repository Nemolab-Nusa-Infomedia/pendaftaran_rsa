@extends('components.layout')

@section('content')
    <div class="row">
        <div class="card box p-3 mt-3">
            <span class="text-secondary fw-bold">Data Pasien</span>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center align-middle">No</th>
                            <th class="text-center align-middle">Nama Lengkap Pasien</th>
                            <th class="text-center align-middle">Kriteria Pasien</th>
                            <th class="text-center align-middle">Alamat</th>
                            <th class="text-center align-middle">Nomor Telephone Pasien</th>
                            <th class="text-center align-middle">Tanggal Masuk</th>
                            <th class="text-center align-middle">Tanggal Keluar</th>
                            <th class="text-center align-middle">Nama Lengkap Pendamping</th>
                            <th class="text-center align-middle">Nomor Telephone Pendamping</th>
                            <th class="text-center align-middle">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($patient as $pasien)
                        <tr>
                            <td class="text-center align-middle">{{ $no++ }}</td>
                            <td class="text-center align-middle">{{ $pasien->nama_lengkap_pasien }}</td>
                            <td class="text-center align-middle">{{ $pasien->kriteria_pasien }}</td>
                            <td class="text-center align-middle">{{ $pasien->alamat }}</td>
                            <td class="text-center align-middle">{{ $pasien->nomor_telepon_pasien }}</td>
                            <td class="text-center align-middle">{{ $pasien->tanggal_masuk }}</td>
                            <td class="text-center align-middle">{{ $pasien->tanggal_keluar }}</td>
                            <td class="text-center align-middle">{{ $pasien->nama_lengkap_pasien }}</td>
                            <td class="text-center align-middle">{{ $pasien->nama_lengkap_pendamping }}</td>
                            <td class="text-center align-middle">{{ $pasien->nomor_telepon_pendamping }}</td>
                            <td class="text-center align-middle aksi">
                                <div class="d-flex gap-3">
                                    <a href="{{ route('detail-pendaftar', ['patient'=>$pasien]) }}" class="text-success"><i class="fa-regular fa-address-card"></i></a>
                                    <a href="" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="...">
                    {!! $patient->links('pagination::bootstrap-5') !!}
                  </nav>
            </div>
        </div>
    </div>
@endsection
