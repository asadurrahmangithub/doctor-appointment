<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use Illuminate\Http\Request;
class FrontEndController extends Controller
{
    public function index(){
        return view('hospital.home.home',[
            'appointments' => Appointment::orderBy('id','desc')->get(),
        ]);
    }


}
