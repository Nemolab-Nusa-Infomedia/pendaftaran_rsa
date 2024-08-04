@extends('components.layout')

@section('content')
    <div class="row">
        <div class="card box p-3 mt-3">
            <span class="text-secondary fw-bold">Data Pendaftar</span>
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
                        <tr>
                            <td class="text-center align-middle">1</td>
                            <td class="text-center align-middle">Vindra Arya Yulian</td>
                            <td class="text-center align-middle">Laki-laki</td>
                            <td class="text-center align-middle">Grendeng</td>
                            <td class="text-center align-middle">083104788904</td>
                            <td class="text-center align-middle">25 Juli 2024</td>
                            <td class="text-center align-middle">25 Juli 2024</td>
                            <td class="text-center align-middle">Feliza Anindya Rahma Putri</td>
                            <td class="text-center align-middle">083104778904</td>
                            <td class="text-center align-middle aksi">
                                <div class="d-flex gap-3">
                                    <a href="{{ route('detail-pendaftar') }}" class="text-success"><i class="fa-regular fa-address-card"></i></a>
                                    <a href="" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">2</td>
                            <td class="text-center align-middle">Vindra Arya Yulian</td>
                            <td class="text-center align-middle">Laki-laki</td>
                            <td class="text-center align-middle">Grendeng</td>
                            <td class="text-center align-middle">083104788904</td>
                            <td class="text-center align-middle">25 Juli 2024</td>
                            <td class="text-center align-middle">25 Juli 2024</td>
                            <td class="text-center align-middle">Feliza Anindya Rahma Putri</td>
                            <td class="text-center align-middle">083104778904</td>
                            <td class="text-center align-middle aksi">
                                <div class="d-flex gap-3">
                                    <a href="{{ route('detail-pendaftar') }}" class="text-success"><i class="fa-regular fa-address-card"></i></a>
                                    <a href="" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
@endsection
