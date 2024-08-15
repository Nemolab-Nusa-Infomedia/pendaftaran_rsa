<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donasi Rumah Singgah Amanah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/donasi/main.css') }}">

    {{-- font awsome --}}
    <script src="https://kit.fontawesome.com/0a267e6f70.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg p-0">
        <div class="container-fluid d-flex justify-content-center">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/rumah-singgah-logo.png') }}" width="150px" alt="">
          </a>
        </div>
    </nav>

    <div class="container-fluid mb-3">
        <div class="stepper mt-4">
            <div id="step-1" class="step active">
                <div class="circle"></div>
                <div class="label">Isi Nominal & Biodata</div>
            </div>
            <div id="step-2" class="step">
                <div class="circle"></div>
                <div class="label">Metode Pembayaran</div>
            </div>
            <div id="step-3" class="step">
                <div class="circle"></div>
                <div class="label">Upload Bukti Transfer</div>
            </div>
            <div id="step-4" class="step">
                <div class="circle"></div>
                <div class="label">Donasi Berhasil Terkirim</div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="row mx-auto">
                <div class="col-12 col-md-9 mx-auto">

                    <form action="">
                        <div class="row p-0">
                            {{-- isi nominal dan biodata --}}
                            <div id="form-part-1" class="row mx-auto p-0">
                                <div class="col-12 col-md-12 p-0">
                                    <h1 class="fw-bold">Form Donatur</h1>
                                    <p>Form Donatur Untuk Pasien Rumah Singgah Amanah</p>
                                </div>
                                <div class="col-12 col-md-12 p-0 mb-3">
                                    <span class="fs-5 fw-bold">Pilih Nominal Donasi</span> <br>
                                    <span class="text-secondary">Masukkan Nominal Donasi Anda</span>

                                    <div class="mb-2 mt-2">
                                        <label class="radio-container mb-2">
                                            <input type="radio" name="amount" value="50000">
                                            <span class="radio-custom"></span>
                                            <span class="radio-label">Rp. 50.000;-</span>
                                        </label>
                                        <label class="radio-container mb-2">
                                            <input type="radio" name="amount" value="50000">
                                            <span class="radio-custom"></span>
                                            <span class="radio-label">Rp. 100.000;-</span>
                                        </label>
                                        <label class="radio-container mb-2">
                                            <input type="radio" name="amount" value="50000">
                                            <span class="radio-custom"></span>
                                            <span class="radio-label">Rp. 150.000;-</span>
                                        </label>
                                        <label class="radio-container mb-2">
                                            <input type="radio" name="amount" value="50000">
                                            <span class="radio-custom"></span>
                                            <span class="radio-label">Rp. 200.000;-</span>
                                        </label>
                                    </div>

                                    <div class="mb-2">
                                        <span class="text-secondary">Nominal Donasi Lainnya</span>
                                        <input type="text" class="form-control" value="Rp.">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 p-0 mb-3">
                                    <span class="fs-5 fw-bold">Isi Biodata</span> <br>
                                    <span class="text-secondary">Lengkapi Data Dibawah ini</span>

                                    <div class="mb-2 mt-2">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Nomor atau Email">
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control" rows="3" placeholder="Tulisakan pesan atau do'a"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            Sembunyikan nama saya (donasi secara anonim)
                                        </div>
                                        <div class="">
                                            <label class="switch">
                                                <input checked="" type="checkbox">
                                                <div class="slider">
                                                    <div class="circle-button">
                                                        <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                                                            </g>
                                                        </svg>
                                                        <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-auto gap-2 p-0">
                                    <button type="button" class="btn btn-c1 text-white" id="next-button-1">Selanjutnya</button>
                                </div>
                            </div>

                            {{-- metode pembayaran  --}}
                            <div id="form-part-2" class="row mx-auto p-0 d-none">
                                <div class="col-12 col-md-12 p-0">
                                    <h1 class="fw-bold">Form Donatur</h1>
                                    <p>Form Donatur Untuk Pasien Rumah Singgah Amanah</p>
                                </div>
                                <div class="col-12 col-md-12 p-0 mb-3">
                                    <span class="fs-5 fw-bold">Pilih Nominal Donasi</span> <br>
                                    <div class="mb-2 mt-2">
                                        <label class="text-secondary">Nominal Donasi </label>
                                        <input type="text" class="form-control py-2 rounded-0" value="Rp." disabled>
                                    </div>

                                    <div class="mb-2">
                                        <span class="text-secondary">Metode Pembayaran</span>

                                        <div class="bg-c2 py-2 px-2 mb-3">
                                            <img src="{{ asset('assets/img/qris.png') }}" width="40px" alt="">
                                            Pembayaran QRIS
                                        </div>

                                        <div class="bg-c2 py-2 px-2 mb-2">
                                            <img src="{{ asset('assets/img/qr.png') }}" width="150px" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mx-auto gap-2 p-0">
                                    <button type="button" class="btn btn-c1 text-white" id="next-button-2">Selanjutnya</button>
                                    <button type="button" class="btn btn-outline-c1" id="back-button-1">Kembali</button>
                                </div>
                            </div>

                            {{-- upload bukti transfer --}}
                            <div id="form-part-3" class="row mx-auto p-0 d-none">
                                <div class="col-12 col-md-12 p-0">
                                    <h1 class="fw-bold">Form Donatur</h1>
                                    <p>Form Donatur Untuk Pasien Rumah Singgah Amanah</p>
                                </div>
                                <div class="col-12 col-md-12 p-0 mb-3">
                                    <span class="fs-5 fw-bold">Unggah Bukti Transfer</span>

                                    {{-- unggah file --}}
                                    <div class="rounded-2 p-3 mt-2" style="border: 1px solid #D4D4D4">
                                        <img src="{{ asset('assets/img/upload.png') }}" class="row mx-auto" style="width: 70px" alt="">

                                        <div class="text-center">
                                            <p class="text-secondary mb-0">Maximum file size 10mb</p>
                                            <p class="text-secondary ">Format file : PNG/ JPG/ PDF</p>
                                        </div>

                                        <div class="d-flex justify-content-center mx-auto position-relative rounded-2 px-1" style="border: 1px solid #00AB45; width: 100px; cursor: pointer;">
                                            <span class="position-absolute text-center align-middle text-c1 mt-12">Unggah File</span>
                                            <input id="file-upload" type="file" name="bg_cover" style="cursor: pointer; opacity: 0; width: 100%">
                                        </div>
                                    </div>

                                    {{-- progress unggah file --}}
                                    <div id="upload-progress" class="rounded-2 p-3 mt-2 d-none" style="border: 1px solid #D4D4D4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/img/upload.png') }}" style="width: 50px" alt="">
                                                <div id="file-info" class="row text-secondary">
                                                    <span id="file-name">nama file</span>
                                                    <span id="file-size">2 MB</span>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="cancel-upload" class="btn"><i id="cancel-icon" class="fa-regular fa-circle-xmark fs-2"></i></button>
                                            </div>
                                        </div>
                                        <div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%">0%</div>
                                        </div>
                                        {{-- Buttons for failed upload --}}
                                        <div id="retry-buttons" class="d-none mt-2">
                                            <button id="retry-upload" class="btn btn-warning">Upload Ulang</button>
                                            <button id="remove-upload" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-auto gap-2 p-0">
                                    <button type="button" class="btn btn-c1 text-white" id="next-button-3">Selanjutnya</button>
                                    <button type="button" class="btn btn-outline-c1" id="back-button-2">Kembali</button>
                                </div>
                            </div>


                            {{-- success donasi --}}
                            <div id="form-part-4" class="row mx-auto p-0 d-none mt-3">
                                <div class="col-12 col-md-12 p-0 mb-3">
                                    <div class="d-flex justify-content-center">
                                        <div class="row">
                                            <img src="{{ asset('assets/img/success.png') }}" class="mx-auto" style="width: 150px" alt="">
            
                                            <div class="text-center">
                                                <h3>Yeay, Donasi Anda Berhasil Terkirim!</h3>
                                                <p>Terima kasih atas donasi Anda di Rumah Singgah Amanah, <br>
                                                    semoga kebaikan ini membawa berkah dan kebahagiaan bagi Anda dan keluarga.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-auto gap-2 p-0">
                                    <a href="{{ route('donasi') }}" class="btn btn-c1 text-white">Donasi Lagi</a>
                                    <a href="https://rumahsinggahamanah.web.id" class="btn btn-outline-c1">Kembali ke Halaman Utama</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/donasi/script.js') }}"></script>

  </body>
</html>
