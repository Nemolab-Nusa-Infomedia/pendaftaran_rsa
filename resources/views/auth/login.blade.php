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
                <img src="{{ asset('assets/img/rumah-singgah-logo.png') }}" class="mx-auto" style="width: 250px" alt="">
                <h5 class="fw-bold text-c2 text-center mb-2">Login Admin Dashboard Rumah Singgah</h5>
                <form action="">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label fw-bold">Email</label>
                            <input type="text" name="email" class="form-control" style="border-radius: 20px" placeholder="Masukkan email akun">
                        </div>
                        <div class="mb-3 position-relative">
                            <label for="password" class="mb-2 fw-bold">Buat Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" id="password" class="form-control" style="border-radius: 20px" name="password" placeholder="buat kata sandi" required>
                                <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; font-size: 18px; z-index: 99;"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mx-auto">
                    <button type="submit" class="btn btn-c3 text-dark fw-bold" style="font-size: 15px">Login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordField = document.getElementById('password');
            var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            var icon = this;
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    </script>
  </body>
</html>
