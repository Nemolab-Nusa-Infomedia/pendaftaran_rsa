<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donasi Rumah Singgah Amanah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .stepper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stepper .step {
            text-align: center;
            position: relative;
            flex: 1;
        }

        .stepper .step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 10px;
            right: -50%;
            width: 100%;
            height: 4px;
            background-color: #cac9c9;
            z-index: -1;
        }

        .stepper .step.active:after {
            background-color: #00AB45;
        }

        .stepper .step .circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #cac9c9;
            display: inline-block;
            line-height: 20px;
        }

        .stepper .step.active .circle {
            background-color: #00AB45;
        }

        .stepper .step .label {
            margin-top: 10px;
            font-size: 14px;
        }

        /* costum radio */
        .radio-container {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .radio-container input[type="radio"] {
            display: none;
        }

        .radio-custom {
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            cursor: pointer;
        }

        .radio-custom:before {
            content: "";
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        input[type="radio"]:checked + .radio-custom:before {
            background-color: #6C4CFF;
        }

        .radio-label {
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        /* costum on off */
        .switch {
            /* switch */
            --switch-width: 46px;
            --switch-height: 24px;
            --switch-bg: rgb(131, 131, 131);
            --switch-checked-bg: #00AB45;
            --switch-offset: calc((var(--switch-height) - var(--circle-diameter)) / 2);
            --switch-transition: all .2s cubic-bezier(0.27, 0.2, 0.25, 1.51);
            /* circle */
            --circle-diameter: 18px;
            --circle-bg: #fff;
            --circle-shadow: 1px 1px 2px rgba(146, 146, 146, 0.45);
            --circle-checked-shadow: -1px 1px 2px rgba(163, 163, 163, 0.45);
            --circle-transition: var(--switch-transition);
            /* icon */
            --icon-transition: all .2s cubic-bezier(0.27, 0.2, 0.25, 1.51);
            --icon-cross-color: var(--switch-bg);
            --icon-cross-size: 6px;
            --icon-checkmark-color: var(--switch-checked-bg);
            --icon-checkmark-size: 10px;
            /* effect line */
            --effect-width: calc(var(--circle-diameter) / 2);
            --effect-height: calc(var(--effect-width) / 2 - 1px);
            --effect-bg: var(--circle-bg);
            --effect-border-radius: 1px;
            --effect-transition: all .2s ease-in-out;
        }

        .switch input {
            display: none;
        }

        .switch {
            display: inline-block;
        }

        .switch svg {
            -webkit-transition: var(--icon-transition);
            -o-transition: var(--icon-transition);
            transition: var(--icon-transition);
            position: absolute;
            height: auto;
        }

        .switch .checkmark {
            width: var(--icon-checkmark-size);
            color: var(--icon-checkmark-color);
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        .switch .cross {
            width: var(--icon-cross-size);
            color: var(--icon-cross-color);
        }

        .slider {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: var(--switch-width);
            height: var(--switch-height);
            background: var(--switch-bg);
            border-radius: 999px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            -webkit-transition: var(--switch-transition);
            -o-transition: var(--switch-transition);
            transition: var(--switch-transition);
            cursor: pointer;
        }

        .circle-button {
            width: var(--circle-diameter);
            height: var(--circle-diameter);
            background: var(--circle-bg);
            border-radius: inherit;
            -webkit-box-shadow: var(--circle-shadow);
            box-shadow: var(--circle-shadow);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transition: var(--circle-transition);
            -o-transition: var(--circle-transition);
            transition: var(--circle-transition);
            z-index: 1;
            position: absolute;
            left: var(--switch-offset);
        }

        .slider::before {
            content: "";
            position: absolute;
            width: var(--effect-width);
            height: var(--effect-height);
            left: calc(var(--switch-offset) + (var(--effect-width) / 2));
            background: var(--effect-bg);
            border-radius: var(--effect-border-radius);
            -webkit-transition: var(--effect-transition);
            -o-transition: var(--effect-transition);
            transition: var(--effect-transition);
        }

        /* actions */

        .switch input:checked+.slider {
            background: var(--switch-checked-bg);
        }

        .switch input:checked+.slider .checkmark {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .switch input:checked+.slider .cross {
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        .switch input:checked+.slider::before {
            left: calc(100% - var(--effect-width) - (var(--effect-width) / 2) - var(--switch-offset));
        }

        .switch input:checked+.slider .circle-button {
            left: calc(100% - var(--circle-diameter) - var(--switch-offset));
            -webkit-box-shadow: var(--circle-checked-shadow);
            box-shadow: var(--circle-checked-shadow);
        }

        .btn-c1{
            background-color: #00AB45;
        }
        .btn-c1:hover{
            background-color: #00AB45;
        }

        .btn-outline-c1{
            background-color: transparent;
            border: 1px solid #00AB45;
            color: #00AB45;
        }
        .btn-outline-c1:hover{
            background-color: #00AB45;
            color: white;
        }

        @media (max-width : 768px) {
            .stepper .step .label {
                font-size: 10px;
            }
        }
    </style>
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
            <div class="step active">
                <div class="circle"></div>
                <div class="label">Isi Nominal & Biodata</div>
            </div>
            <div class="step">
                <div class="circle"></div>
                <div class="label">Metode Pembayaran</div>
            </div>
            <div class="step">
                <div class="circle"></div>
                <div class="label">Upload Bukti Transfer</div>
            </div>
            <div class="step">
                <div class="circle"></div>
                <div class="label">Donasi Berhasil Terkirim</div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="row mx-auto">
                <div class="col-12 col-md-9 mx-auto">

                    <form action="">
                        <div class="row p-0">
                            <div class="col-12 col-md-12 p-0">
                                <h1 class="fw-bold">Form Donatur</h1>
                                <p>Form Donatur Untuk Pasien Rumah Singgah Amanah</p>
                            </div>
                            <div class="row mx-auto p-0">
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
                                    <button class="btn btn-c1 text-white">Selanjutnya</button>
                                    <button class="btn btn-outline-c1">Kembali</button>
                                </div>
                            </div>

                            {{--  --}}
                            <div class="row mx-auto p-0">
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
                                    <button class="btn btn-c1 text-white">Selanjutnya</button>
                                    <button class="btn btn-outline-c1">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>

    </script>
  </body>
</html>
