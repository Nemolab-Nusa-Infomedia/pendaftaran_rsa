<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Exports\DonationExport;
use Maatwebsite\Excel\Facades\Excel;

class DonasiController extends Controller
{
    public function index(){
        $donatur = Donation::all();
        return view('menu.donasi.index',compact('donatur'),[
            'title' => 'Donasi',
            'inner' => 'Data'
        ]);
    }

    public function exportExcel() {
        return Excel::download(new DonationExport, 'datadonasi.xlsx');
    }

    public function exportPdf() {
        Carbon::setLocale('id');
        $now = Carbon::now();
        $formattedDate = $now->timezone('Asia/Jakarta')->translatedFormat('d F Y H:i:s');


        ob_start(); // Mulai output buffering

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml(view('menu.donasi.donation-pdf', [
            'donatur' => Donation::all(),
            'tanggal' => $formattedDate
        ]));

        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Bersihkan output buffering
        ob_end_clean();

        // Menambahkan header HTTP secara eksplisit
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="datapatient.pdf"');

        $dompdf->stream('datadonasi.pdf', ["Attachment" => true]);

        exit();
    }

}
