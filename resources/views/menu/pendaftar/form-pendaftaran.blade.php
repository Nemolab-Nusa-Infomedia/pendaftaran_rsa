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
                <h3 class="fw-bold ms-1 mt-2">Daftar RSA</h3>
                <form action="">
                    <div class="row col-12 col-md-12 mx-auto mt-3">
                        <span class="fw-bold text-secondary mb-3 border-bottom border-secondary">Pasien</span>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap Pasien</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap Pasien">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Telepon Pasien</label>
                                <input type="text" class="form-control" placeholder="Nomor Telepon Pasien">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kriteria Pasien</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>--- Pilih Kriteria Pasien ---</option>
                                    <option value="Anak-Anak">Anak-Anak</option>
                                    <option value="Dewasa">Dewasa</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Alamat</label>
                                <input type="text" class="form-control" placeholder="JL.Rumah Singgah Amanah, RT 01 RW 01">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kota/Kecamatan</label>
                                <input type="text" class="form-control" placeholder="Purwokerto">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Provinsi</label>
                                <input type="text" class="form-control" placeholder="Jawa Tengah">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Masuk</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Keluar</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        {{-- document lampiran --}}
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto KTP Pasien</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto Terbaru Pasien</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto Kartu Keluarga</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto Surat  Rujukan RS/Dokter</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto BPJS Kelas 3</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto SKM (Bila Ada)</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>

                        {{-- pemdamping --}}
                        <span class="fw-bold text-secondary mb-3 border-bottom border-secondary">Pendamping</span>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap Pendamping</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap Pendamping">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Telepon Pendamping</label>
                                <input type="text" class="form-control" placeholder="Nomor Telepon Pendamping">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto KTP Pendamping</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto Terbaru Pendamping</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </div>

                        <div class="row gap-2 mx-auto mt-3">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#simpan" class="btn btn-c3 text-white">Daftar</a>
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

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
