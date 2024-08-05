<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran RSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form class="container p-3" action="{{ route('patient-store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namaLengkapPasien" class="form-label">Nama Lengkap Pasien</label>
            <input type="text" class="form-control" name="nama_lengkap_pasien" id="namaLengkapPasien">
        </div>
        <div class="mb-3">
            <label for="kriteriaPasien" class="form-label">Kriteria Pasien</label>
            <select class="form-select" id="kriteriaPasien" name="kriteria_pasien">
                <option selected>Pilih Kriteria Pasien</option>
                <option value="Anak-anak">Anak-anak</option>
                <option value="Dewasa">Dewasa</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
        </div>
        <div class="mb-3">
            <label for="tanggal_keluar" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>