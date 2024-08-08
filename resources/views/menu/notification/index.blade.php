@extends('components.layout')

@section('content')
<div class="row mx-auto">
    @php
        $no = 1;
    @endphp
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses !</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @forelse($newPatient as $patient)           
    <div class="col-12 col-md-4 mb-3">
        <a href="{{ route('detail-pendaftar', ['patient'=>$patient]) }}">
            <div class="card p-2 {{ $patient->is_read == 1 ? 'card-notification-c6' : 'card-notification-c7'  }}">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <span class="btn-c10 px-2 rounded-2 fw-bold">{{ $no++ }}</span>
                    <div class="row fw-bold">
                        <span>{{ $patient->nama_lengkap_pasien }}</span>
                        <span class="text-secondary">{{ $patient->kriteria_pasien }}</span>
                    </div>
                    @if($patient->is_read == 1)
                    <div class="text-secondary">
                        <span>{{ $patient->created_at }}</span> <br>
                        <span class="bg-success text-white px-2 rounded-2 fw-bold">Sudah dibaca</span>
                    </div>
                    @else
                    <div class="text-secondary">
                        <span>{{ $patient->created_at }}</span> <br>
                        <span class="bg-c7 text-dark px-2 rounded-2 fw-bold">Belum dibaca</span>
                    </div>
                    @endif
                </div>
            </div>
        </a>
    </div>
    @empty
    <div class="opacity-75 h4 text-center pt-3">Belum ada pendaftar</div>
    @endforelse
</div>  
@endsection
