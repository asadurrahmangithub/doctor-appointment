<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('hospital.appointment.appointment',[
            'doctors' => Doctor::latest()->get(),
            'departments' => Department::latest()->get(),
        ]);
    }
}
