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
<table>
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
                    <img src="{{ public_path('storage/'.$donor->payment_proof) }}" alt="" width="80">
                    {{-- {{ $donor->payment_proof }} --}}
                </td>
                <td class="text-center align-middle">{{ $donor->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
</table>