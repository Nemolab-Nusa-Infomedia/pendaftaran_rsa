<style>
    table, th, td {
        border : 1px solid rgb(0, 0, 0);
        border-collapse: collapse;
        font-size: 12px
    }
    th, td {
        text-align: center;
        align-items: center;
        border-bottom: 1px solid black;
    }
    h3{
        text-align: center;
    }
    p {
        font-size: 12px;
        text-align: right;
    }
</style>
<h3>Data Donasi Rumah Singgah Amanah</h3>
<p>{{ $tanggal }}</p>
<table width="100%">
        <thead>
            <tr>
                <th class="text-center align-middle">Nama Lengkap Pasien</th>
                <th class="text-center align-middle">Kriteria Pasien</th>
                <th class="text-center align-middle">Nomor Telepon Pasien</th>
                <th class="text-center align-middle">Alamat</th>
                <th class="text-center align-middle">Kota/Kecamatan</th>
                <th class="text-center align-middle">Provinsi</th>
                <th class="text-center align-middle">Tanggal Masuk</th>
                <th class="text-center align-middle">Tanggal Keluar</th>
                <th class="text-center align-middle">Nama Lengkap Pendamping</th>
                <th class="text-center align-middle">Nomor Telepon Pendamping</th>
            </tr>
            <tr>
                <th>Lampiran Pasien</th>
            </tr>
            <tr>
                <th class="text-center align-middle">Foto KTP Pasien</th>
                <th class="text-center align-middle">Foto Terbaru Pasien</th>
                <th class="text-center align-middle">Foto Kartu Keluarga</th>
                <th class="text-center align-middle">Foto Surat Rujukan RS/Dokter</th>
                <th class="text-center align-middle">Foto BPJS Kelas 3</th>
                <th class="text-center align-middle">Foto SKM (Bila Ada)</th>
            </tr>
             <tr>
                <th>Lampiran Pendamping</th>
            </tr>
            <tr>
                <th class="text-center align-middle">Foto KTP Pendamping</th>
                <th class="text-center align-middle">Foto Terbaru Pendamping</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center align-middle">{{ $patient->nama_lengkap_pasien }}</td>
                <td class="text-center align-middle">{{ $patient->nomor_telepon_pasien }}</td>
                <td class="text-center align-middle">{{ $patient->kriteria_pasien }}</td>
                <td class="text-center align-middle">{{ $patient->alamat }}</td>
                <td class="text-center align-middle">{{ $patient->kecamatan }}</td>
                <td class="text-center align-middle">{{ $patient->provinsi }}</td>
                <td class="text-center align-middle">{{ $patient->tanggal_masuk }}</td>
                <td class="text-center align-middle">{{ $patient->tanggal_keluar }}</td>
                <td class="text-center align-middle">{{ $patient->tanggal_masuk }}</td>
                <td class="text-center align-middle">{{ $patient->tanggal_masuk }}</td>
            </tr>
            <tr></tr>
            <tr>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_ktp_pasien)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_terbaru_pasien)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_kk)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_surat_rujukan)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_bpjs_kelas_tiga)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_skm)))}}" alt="" width="80">
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_terbaru_pendamping)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$patient->foto_ktp_pendamping)))}}" alt="" width="80">
                </td>
            </tr>
        </tbody>
</table>