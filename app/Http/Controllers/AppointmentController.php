<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Cart;
use DB;

class AppointmentController extends Controller
{
    private $appointment;
    public function index(){
        return view('hospital.appointment.appointment',[
            'departments' => Department::latest()->get(),
            'appointments' => Cart::getContent(),

            'doctors' => DB::table('doctors')
                ->join('departments','doctors.department_id','departments.id')
                ->select('doctors.*','departments.name')
                ->get(),
        ]);
    }
    public function show(Request $request){
        Cart::add([
            'id'        =>  rand(),
            'name'      => '1',
            'price'     => '1',
            'quantity'  => '1',
            'attributes'=> [
                'appointment_date' => $request->appointment_date,
                'doctor_id' => $request->doctor_id,
                'fee' => $request->fee,

            ]
        ]);
        return redirect()->back();
    }
    public function remove($id)
    {
        $i = $id;
        Cart::remove($i);
        return back()->with('message', 'Doctor Appointment Delete Successfully!');
    }

    public function store(Request $request){

        foreach (Cart::getContent() as $item){

            $this->appointment = new Appointment();

            $this->appointment->doctor_id = $item->doctor_id;
            $this->appointment->appointment_on = rand();
            $this->appointment->appointment_date = $item->appointment_date;
            $this->appointment->patient_name = $request->patient_name;
            $this->appointment->patient_phone = $request->patient_phone;

            $this->appointment->total_fee = $request->total_fee;
            $this->appointment->paid_amount = $request->paid_amount;
            $this->appointment->save();

            Cart::remove($item->id);
        }
        return redirect()->route('home')->with('message', 'Doctor Appointment Add Successfully!');
    }


}
