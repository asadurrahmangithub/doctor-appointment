<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontEndController extends Controller
{
    public function index(){
        return view('hospital.home.home',[

            'appointments' => DB::table('appointments')
                ->join('doctors','appointments.doctor_id','doctors.id')
                ->select('appointments.*','doctors.doctor_name')
                ->orderBy('id','desc')
                ->get(),
        ]);
    }


}
