@extends('components.layout')

@section('content')
<div class="row mx-auto">
    @php
        $no = 1;
    @endphp
    @foreach($newPatient as $patient)           
    <div class="col-12 col-md-4 mb-3">
        <a href="{{ route('detail-pendaftar', ['patient'=>$patient]) }}">
            <div class="card p-2 card-notification">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <span class="btn-c10 px-2 rounded-2 fw-bold">{{ $no++ }}</span>
                    <div class="row fw-bold">
                        <span>{{ $patient->nama_lengkap_pasien }}</span>
                        <span class="text-secondary">{{ $patient->kriteria_pasien }}</span>
                    </div>
                    <div class="text-secondary">
                        <span>{{ $patient->created_at }}</span> <br>
                        <span class="bg-c7 text-dark px-2 rounded-2 fw-bold">Accept</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
