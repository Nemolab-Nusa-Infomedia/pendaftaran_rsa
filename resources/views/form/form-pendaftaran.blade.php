<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://kit.fontawesome.com/0a267e6f70.js" crossorigin="anonymous"></script>

    <style>
        /* Style untuk preview gambar */
        .preview-image {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            display: none; /* Mulai tersembunyi */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="card box p-2 mt-3 mb-3 mx-auto">
                <!-- Success/Error Alerts -->
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
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ asset('assets/img/rumah-singgah-logo.png') }}" width="150px" alt="">
                    <h3 class="fw-bold ms-1 mt-2">Daftar RSA</h3>
                </div>
                <form id="registrationForm" action="{{ route('store-pendaftaran') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Fields -->
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
                                <label for="foto-ktp-pasien" class="form-label fw-bold @error('foto_ktp_pasien') is-invalid @enderror">Foto KTP Pasien</label>
                                <input id="foto-ktp-pasien" name="foto_ktp_pasien" class="form-control form-control-sm" type="file">
                                @error('foto_ktp_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-ktp-pasien" class="preview-image" src="#" alt="Preview Foto KTP Pasien">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label for="foto-terbaru-pasien" class="form-label fw-bold @error('foto_terbaru_pasien') is-invalid @enderror">Foto Terbaru Pasien</label>
                                <input id="foto-terbaru-pasien" name="foto_terbaru_pasien" class="form-control form-control-sm" type="file">
                                @error('foto_terbaru_pasien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-terbaru-pasien" class="preview-image" src="#" alt="Preview Foto Terbaru Pasien">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label for="foto-kk" class="form-label fw-bold @error('foto_kk') is-invalid @enderror">Foto Kartu Keluarga</label>
                                <input id="foto-kk" name="foto_kk" class="form-control form-control-sm" type="file">
                                @error('foto_kk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-kk" class="preview-image" src="#" alt="Preview Foto Kartu Keluarga">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label for="foto-surat-rujukan" class="form-label fw-bold @error('foto_surat-rujukan') is-invalid @enderror">Foto Surat Rujukan RS/Dokter</label>
                                <input id="foto-surat-rujukan" name="foto_surat-rujukan" class="form-control form-control-sm" type="file">
                                @error('foto_surat-rujukan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-surat-rujukan" class="preview-image" src="#" alt="Preview Foto Surat Rujukan RS/Dokter">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label for="foto-bpjs" class="form-label fw-bold @error('foto_bpjs') is-invalid @enderror">Foto BPJS Kelas 3</label>
                                <input id="foto-bpjs" name="foto_bpjs" class="form-control form-control-sm" type="file">
                                @error('foto_bpjs')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-bpjs" class="preview-image" src="#" alt="Preview Foto BPJS Kelas 3">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label for="foto-skm" class="form-label fw-bold @error('foto_skm') is-invalid @enderror">Foto SKM (Bila Ada)</label>
                                <input id="foto-skm" name="foto_skm" class="form-control form-control-sm" type="file">
                                @error('foto_skm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-pasien" class="preview-image" src="#" alt="Preview Foto SKM (Bila Ada)">
                            </div>
                        </div>
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
                                <label for="foto-ktp-pendamping" class="form-label fw-bold @error('foto_ktp_pendamping') is-invalid @enderror">Foto KTP Pendamping</label>
                                <input id="foto-ktp-pendamping" name="foto_ktp_pendamping" class="form-control form-control-sm" type="file">
                                @error('foto_ktp_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-ktp-pendamping" class="preview-image" src="#" alt="Preview Foto KTP Pendamping">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="foto-terbaru-pendamping" class="form-label fw-bold @error('foto_terbaru_pendamping') is-invalid @enderror">Foto Terbaru Pendamping</label>
                                <input id="foto-terbaru-pendamping" name="foto_terbaru_pendamping" class="form-control form-control-sm" type="file">
                                @error('foto_terbaru_pendamping')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img id="preview-foto-terbaru-pendamping" class="preview-image" src="#" alt="Preview Foto Terbaru Pendamping">
                            </div>
                        </div>
                    </div>
                    <!-- Button to trigger modal -->
                    <div class="row gap-2 mx-auto mt-3">
                        <button type="button" class="btn btn-c3 text-white" data-bs-toggle="modal" data-bs-target="#simpan">Daftar</button>
                        <a href="https://rumahsinggahamanah.web.id/" class="btn btn-outline-c9">Kembali</a>
                    </div>
                    <!-- Modal -->
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
                                    <button type="submit" class="btn btn-c3 text-white" id="submitButton">Daftar</button>
                                </div>
                                <!-- Loading Spinner -->
                                <div class="modal-body text-center d-none" id="loadingSpinner">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <p class="mt-2">Data sedang dikirim mohon tunggu dan jangan meninggalkan halaman ini hinggal proses selesai.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('submitButton').addEventListener('click', function () {
            document.getElementById('loadingSpinner').classList.remove('d-none');
        });
    </script>

    <script>
        // Fungsi untuk menampilkan preview gambar
        function previewImage(input, imgElement) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imgElement.src = e.target.result; // Set gambar yang dipilih sebagai sumber gambar
                    imgElement.style.display = 'block'; // Tampilkan elemen gambar
                }

                reader.readAsDataURL(input.files[0]); // Baca file sebagai URL data
            }
        }

        // Bind perubahan input pada setiap input file
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('foto-ktp-pasien').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-ktp-pasien'));
            });
            document.getElementById('foto-terbaru-pasien').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-terbaru-pasien'));
            });
            document.getElementById('foto-kk').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-kk'));
            });
            document.getElementById('foto-surat-rujukan').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-surat-rujukan'));
            });
            document.getElementById('foto-bpjs').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-bpjs'));
            });
            document.getElementById('foto-skm').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-skm'));
            });
            document.getElementById('foto-ktp-pendamping').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-ktp-pendamping'));
            });
            document.getElementById('foto-terbaru-pendamping').addEventListener('change', function() {
                previewImage(this, document.getElementById('preview-foto-terbaru-pendamping'));
            });
        });
    </script>
</body>
</html>
