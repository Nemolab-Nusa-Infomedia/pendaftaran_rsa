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
                <th class="text-center align-middle">No</th>
                <th class="text-center align-middle">Nama Lengkap</th>
                <th class="text-center align-middle">Nomor Atau Email</th>
                <th class="text-center align-middle">Pesan</th>
                <th class="text-center align-middle">Metode</th>
                <th class="text-center align-middle">Bukti Transfer</th>
                <th class="text-center align-middle">Tanggal Tranfer</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($donatur as $donor)
            <tr>
                <td class="text-center align-middle">{{ $no++ }}</td>
                <td class="text-center align-middle">{{ $donor->name }}</td>
                <td class="text-center align-middle">{{ $donor->no_or_email }}</td>
                <td class="text-center align-middle">{{ $donor->message_donor }}</td>
                <td class="text-center align-middle">{{ $donor->method_payment }}</td>
                <td class="text-center align-middle">
                    {{-- <img src="{{ url('storage/'.$donor->payment_proof) }}" alt="" width="80"> --}}
                    <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/'.$donor->payment_proof)))}}" alt="" width="80">
                </td>
                <td class="text-center align-middle">{{ $donor->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
</table>