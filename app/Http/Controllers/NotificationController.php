<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $newPatient = Patient::where('is_accepted', false)->get();
        return view('menu.notification.index',compact('newPatient'),[
            'title' => 'Notification',
            'inner' => 'Data Masuk'
        ]);
    }
}
