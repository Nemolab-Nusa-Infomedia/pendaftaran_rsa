<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://kit.fontawesome.com/0a267e6f70.js" crossorigin="anonymous"></script>
</head>
  <body>

    <div class="d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="card box p-2 mt-3 mb-3 mx-auto">
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
                <h3 class="fw-bold ms-1 mt-2">Daftar RSA</h3>
                <form action="{{ route('store-pendaftaran') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row col-12 col-md-12 mx-auto mt-3">
                        <span class="fw-bold text-secondary mb-3 border-bottom border-secondary">Pasien</span>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label id="nama-lengkap-pasien" class="form-label fw-bold @error('nama_lengkap_pasien') is-invalid @enderror">Nama Lengkap Pasien</label>
                                <input id="nama-lengkap-pasien" name="nama_lengkap_pasien" type="text" class="form-control" placeholder="Nama Lengkap Pasien" value="{{ old('nama_lengkap_pasien') }}">
                                @error('nama_lengkap_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label id="nomor-telepon-pasien" class="form-label fw-bold @error('nomor_telepon_pasien') is-invalid @enderror">Nomor Telepon Pasien</label>
                                <input id="nomor-telepon-pasien" name="nomor_telepon_pasien" type="text" class="form-control" placeholder="Nomor Telepon Pasien" value="{{ old('nomor_telepon_pasien') }}">
                                @error('nomor_telepon_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label id="kriteria-pasien" class="form-label fw-bold">Kriteria Pasien</label>
                                <select id="kriteria-pasien" class="form-select @error('kriteria_pasien') is-invalid @enderror" aria-label="Default select example" name="kriteria_pasien">
                                    <option selected disabled value="">--- Pilih Kriteria Pasien ---</option>
                                    <option value="Anak-Anak">Anak-Anak</option>
                                    <option value="Dewasa">Dewasa</option>
                                  </select>
                                  @error('kriteria_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label id="alamat-pasien" class="form-label fw-bold @error('alamat') is-invalid @enderror">Alamat</label>
                                <input id="alamat-pasien" name="alamat" type="text" class="form-control" placeholder="JL.Rumah Singgah Amanah, RT 01 RW 01" value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="kecamatan" class="form-label fw-bold @error('kecamatan') is-invalid @enderror">Kota/Kecamatan</label>
                                <input id="kecamatan" name="kecamatan" type="text" class="form-control" placeholder="Purwokerto" value="{{ old('kecamatan') }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="provinsi" class="form-label fw-bold @error('provinsi') is-invalid @enderror">Provinsi</label>
                                <input id="provinsi" name="provinsi" type="text" class="form-control" placeholder="Jawa Tengah" value="{{ old('provinsi') }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="tanggal-masuk" class="form-label fw-bold @error('tanggal_masuk') is-invalid @enderror">Tanggal Masuk</label>
                                <input id="tanggal-masuk" name="tanggal_masuk" type="date" class="form-control">
                                @error('tanggal_masuk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="tanggal-keluar" class="form-label fw-bold @error('tanggal_keluar') is-invalid @enderror">Tanggal Keluar</label>
                                <input id="tanggal-keluar" name="tanggal_keluar" type="date" class="form-control">
                                @error('tanggal_keluar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- document lampiran --}}
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-ktp-pasien" class="form-label fw-bold @error('foto_ktp_pasien') is-invalid @enderror">Foto KTP Pasien</label>
                                <input id="foto-ktp-pasien" name="foto_ktp_pasien" class="form-control form-control-sm" type="file">
                                @error('foto_ktp_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-terbaru-pasien" class="form-label fw-bold @error('foto_terbaru_pasien') is-invalid @enderror">Foto Terbaru Pasien</label>
                                <input id="foto-terbaru-pasien" name="foto_terbaru_pasien" class="form-control form-control-sm" type="file">
                                @error('foto_terbaru_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-kk" class="form-label fw-bold @error('foto_kk') is-invalid @enderror">Foto Kartu Keluarga</label>
                                <input id="foto-kk" name="foto_kk" class="form-control form-control-sm" type="file">
                                @error('foto_kk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-surat-rujukan" class="form-label fw-bold @error('foto_surat_rujukan') is-invalid @enderror">Foto Surat Rujukan RS/Dokter</label>
                                <input id="foto-surat-rujukan" name="foto_surat_rujukan" class="form-control form-control-sm" type="file">
                                @error('foto_surat_rujukan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-bpjs" class="form-label fw-bold @error('foto_bpjs_kelas_tiga') is-invalid @enderror">Foto BPJS Kelas 3</label>
                                <input id="foto-bpjs" name="foto_bpjs_kelas_tiga" class="form-control form-control-sm" type="file">
                                @error('foto_bpjs_kelas_tiga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label id="foto-skm" class="form-label fw-bold">Foto SKM (Bila Ada)</label>
                                <input id="foto-skm" name="foto_skm" class="form-control form-control-sm" type="file">
                            </div>
                        </div>

                        {{-- pemdamping --}}
                        <span class="fw-bold text-secondary mb-3 border-bottom border-secondary">Pendamping</span>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="nama-lengkap-pendamping" class="form-label fw-bold @error('nama_lengkap_pendamping') is-invalid @enderror">Nama Lengkap Pendamping</label>
                                <input id="nama-lengkap-pendamping" name="nama_lengkap_pendamping" type="text" class="form-control" placeholder="Nama Lengkap Pendamping" value="{{ old('nama_lengkap_pendamping') }}">
                                @error('nama_lengkap_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="nomor-telepon-pendamping" class="form-label fw-bold @error('nomor_telepon_pendamping') is-invalid @enderror">Nomor Telepon Pendamping</label>
                                <input id="nomor-telepon-pendamping" name="nomor_telepon_pendamping" type="text" class="form-control" placeholder="Nomor Telepon Pendamping" value="{{ old('nomor_telepon_pendamping') }}">
                                @error('nomor_telepon_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="foto-ktp-pendamping" class="form-label fw-bold @error('foto_ktp_pendamping') is-invalid @enderror">Foto KTP Pendamping</label>
                                <input id="foto-ktp-pendamping" name="foto_ktp_pendamping" class="form-control form-control-sm" type="file">
                                @error('foto_ktp_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label id="foto-terbaru-pendamping" class="form-label fw-bold @error('foto_terbaru_pendamping') is-invalid @enderror">Foto Terbaru Pendamping</label>
                                <input id="foto-terbaru-pendamping" name="foto_terbaru_pendamping" class="form-control form-control-sm" type="file">
                                @error('foto_terbaru_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row gap-2 mx-auto mt-3">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#simpan" class="btn btn-c3 text-white">Daftar</button>
                            <a href="https://rumahsinggahamanah.web.id/" class="btn btn-outline-c9">Kembali</a>
                        </div>
                    </div>

                    {{-- pop up --}}
                    <div class="modal fade" id="simpan" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-3">
                            <div class="d-flex justify-content-between">
                                <div class="row">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Anda yakin akan mengirim data ini?</h1>
                                    <span>Jika anda masih ragu, Silahkan cek kembali data yang anda isi,</span>
                                    <span>Klik tombol <b>daftar</b> jika sudah yakin untuk melanjutkan pendaftaran anda!!</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="d-flex justify-content-end gap-1 mt-3">
                                <button type="button" class="btn btn-outline-c9" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-c3 text-white">Daftar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
