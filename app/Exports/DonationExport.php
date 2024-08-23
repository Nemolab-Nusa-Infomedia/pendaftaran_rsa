<?php

namespace App\Exports;


use App\Models\Donation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DonationExport implements FromView
{
    public function view(): View
    {
        return view('menu.donasi.donation-excel', [
            'donatur' => Donation::all()
        ]);
    }
}
