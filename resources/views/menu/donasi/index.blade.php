@extends('components.layout')

@section('content')
<div class="row">
    <div class="card box p-3 mt-3">
        @if(session('success'))
        <div class="position-absolute top-2 end-0 alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses !</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session('error'))
        <div class="position-absolute top-2 end-0 alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Gagal !</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <span class="text-secondary fw-bold">Data Donasi</span>
        <div class="d-flex gap-3 justify-content-end">
            <a class="text-end fs-4" href="{{ route('export-excel-donation') }}"><i class="fa-solid fa-file-excel text-success"></i></a>
            <a class="text-end fs-4" href="{{ route('export-pdf-donation') }}"><i class="fa-solid fa-file-pdf text-danger"></i></a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama Lengkap</th>
                        <th class="text-center align-middle">Nomor Atau Email</th>
                        <th class="text-center align-middle">Pesan</th>
                        <th class="text-center align-middle">Metode</th>
                        <th class="text-center align-middle">Bukti Transfer</th>
                        <th class="text-center align-middle">Tanggal Tranfer</th>
                        <th class="text-center align-middle">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($donatur as $donor)
                    <tr>
                        <td class="text-center align-middle">{{ $no++ }}</td>
                        <td class="text-center align-middle">{{ $donor->name }}</td>
                        <td class="text-center align-middle">{{ $donor->no_or_email }}</td>
                        <td class="text-center align-middle">{{ $donor->message_donor }}</td>
                        <td class="text-center align-middle">{{ $donor->method_payment }}</td>
                        <td class="text-center align-middle">
                            <img src="{{ asset('storage/'.$donor->payment_proof) }}" alt="" width="80">
                        </td>
                        <td class="text-center align-middle">{{ $donor->created_at }}</td>
                        <td class="text-center align-middle aksi">
                            <div class="d-flex gap-3">
                                <a href="" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                {{-- {!! $patient->links('pagination::bootstrap-5') !!} --}}
              </nav>
        </div>
    </div>
</div>
@endsection
