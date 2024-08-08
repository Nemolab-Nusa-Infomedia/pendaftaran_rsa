<style>
    table, th, td {
        border : 1px solid rgb(0, 0, 0);
        border-collapse: collapse;
        font-size: 10px
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
        font-size: 10px;
        text-align: right;
    }
</style>
<h3>Data Pasien Rumah Singgah Amanah</h3>
<p>{{ $tanggal }}</p>
<table width="100%">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Lengkap Pasien</th>
        <th>Kriteria Pasien</th>
        <th>Alamat</th>
        <th>Nomor Telephone Pasien</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Nama Lengkap Pendamping</th>
        <th>Nomor Telephone Pendamping</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($patient as $pasien)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pasien->nama_lengkap_pasien }}</td>
                <td>{{ $pasien->kriteria_pasien }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->nomor_telepon_pasien }}</td>
                <td>{{ $pasien->tanggal_masuk }}</td>
                <td>{{ $pasien->tanggal_keluar }}</td>
                <td>{{ $pasien->nama_lengkap_pendamping }}</td>
                <td>{{ $pasien->nomor_telepon_pendamping }}</td>
            </tr>
        @endforeach
    </tbody>
</table>