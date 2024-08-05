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

    <div class="container d-flex justify-content-center align-items-center notif-pendaftaran">
        <div class="box p-3">
            <div class="row mx-auto">
                <h3 class="fw-bold text-c2 text-center mb-2">PENDAFTARAN ANDA BERHASIL</h3>

                <img src="{{ asset('assets/img/success-registration.png') }}" class="mx-auto mb-3" style="width: 500px" alt="">

                <p class="text-center">Pendaftaran anda telah berhasil,Data anda sedang di proses Untuk Konfirmasi selanjutnya anda akan dihubungi oleh admin kami, Terimakasih telah mendaftar.</p>

                <div class="row mx-auto">
                    <a href="https://rumahsinggahamanah.web.id/" class="btn btn-c8 text-dark fw-bold" style="font-size: 15px">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
