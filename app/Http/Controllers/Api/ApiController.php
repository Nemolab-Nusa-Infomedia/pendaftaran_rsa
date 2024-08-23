<?php

namespace App\Http\Controllers\Api;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function getDataDonor(){
        $donations = Donation::all();

        try {
            $donorData = $donations->map(function($donation) {
                if ($donation->is_anonim) {
                    $donation->name = 'Anonim';
                }

                $getData = [
                    'name' => $donation->name,
                    'message_donor' => $donation->message_donor,
                    'created_at' => $donation->created_at
                ];
                return $getData;
            });
            return response()->json([
                'status' => 200,
                'data' => $donorData
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'error' => $th->getMessage()
            ]);
        }
    }
}
