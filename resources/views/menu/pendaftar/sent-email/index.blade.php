<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Pemberitahuan Pendaftar Baru</title>
    <style>
        /* Basic Reset */
        body, table, td, a {
            margin: 0;
            padding: 0;
            border: 0;
            line-height: 100%;
        }
        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                padding: 10px !important;
            }
            .btn {
                padding: 8px 16px !important;
                font-size: 14px !important;
            }
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f2f2f2; padding: 20px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" max-width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto;">
                    <tr>
                        <td align="center" style="font-size: 18px; color: #888888; padding-bottom: 10px;">
                            Rumah Singgah Amanah
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px; color: #333333; text-align: center;">
                            <p>Halo Admin,</p>
                            <p>Ada Pendaftar baru nih dengan data sebagai berikut : </p>
                            <p>Nama : {{ $patient->nama_lengkap_pasien }}</p>
                            <p>Kriteria : {{ $patient->kriteria_pasien }}</p>
                            <p>Cek data pendaftar dengan klik tombol di bawah!</p>
                            <a href="{{ route('pendaftaran') }}" class="btn" style="display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 16px; cursor: pointer; border: none;">Cek Data</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
