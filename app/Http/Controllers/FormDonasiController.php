<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\DonationRequest;

class FormDonasiController extends Controller
{
    public function index(){
        return view('menu.donasi.form-donasi.index');
    }

    public function donate(DonationRequest $request){
        $data = $request->validated();
        try {
            $pay_proof = $request->file('payment_proof');
            $name_pay_proof = 'payproof_' . Str::random(13) . '.' .$pay_proof->getClientOriginalExtension();
            $namePath  = $pay_proof->storeAs('payment_proof', $name_pay_proof, 'public');
            $data['payment_proof'] = $namePath; 
            Donation::create($data);
            return response()->json([
                'status' => 200,
                'msg' => "Data added successfully"
            ], 200);
        } catch (Throwable $th) {
            Log::error('Error saving file to storage:', ['exception' => $th]);
           return response()->json([
                'status' => 500,
                'msg' => $th->getMessage()
            ], 500);
        }
    }
}
