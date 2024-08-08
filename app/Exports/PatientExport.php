<?php

namespace App\Exports;

use App\Models\Patient;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PatientExport implements FromView
{
    public function view(): View
    {
        return view('menu.pendaftar.patient-excel', [
            'patient' => Patient::all()
        ]);
    }
}
