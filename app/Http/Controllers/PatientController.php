<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;

class PatientController extends Controller
{
    public function viewFormPatient(){
        return view('welcome');
    }
    public function store(StorePatientRequest $request){

        Patient::create($request->validated());
        return back()->with('success', 'Data Pasien Berhasil Disimpan !');
    }
}
