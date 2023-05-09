<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Cart;

class AppointmentController extends Controller
{
    private $appointment;
    public function index(){
        return view('hospital.appointment.appointment',[
            'doctors' => Doctor::latest()->get(),
            'departments' => Department::latest()->get(),
            'appointments' => Cart::getContent(),
        ]);
    }
    public function show(Request $request){
        Cart::add([
            'id'        =>  100,
            'name'      => $request->appointment_date,
            'price'     => $request->doctor_id,
            'quantity'  => $request->fee,
            'attributes'=> []
        ]);
        return redirect()->back();
    }
    public function remove()
    {
        Cart::remove();
        return back()->with('message', 'Cart product info deleted.');
    }
}
