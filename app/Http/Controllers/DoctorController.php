<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor(){
        return view('hospital.doctor.add-doctor',[
            'departments' => Department::latest()->get(),
            'doctors' => Doctor::latest()->get(),
        ]);
    }

    public function store(Request $request){
        $doctor = new Doctor();
        $doctor->doctor_name = $request->doctor_name;
        $doctor->department_id = $request->department_name;
        $doctor->fee = $request->fee;
        $doctor->phone = $request->phone;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Data Added Successfully!');

    }

    public function edit($id){
        return view('hospital.doctor.edit-doctor',[
            'departments' => Department::latest()->get(),
            'doctor'=>Doctor::find($id)
        ]);
    }
    public function update(Request $request){
        $doctor = Doctor::find($request->id);
        $doctor->doctor_name = $request->doctor_name;
        $doctor->department_id = $request->department_name;
        $doctor->fee = $request->fee;
        $doctor->phone = $request->phone;
        $doctor->save();
        return redirect()->route('add.doctor')->with('message','Doctor Data Update Successfully!');
    }

    public function delete($id){
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('add.doctor')->with('message','Doctor Data Delete Successfully!');
    }
}
