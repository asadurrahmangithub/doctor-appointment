@extends('hospital.master')
@section('content')
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Add Doctor</div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('update.doctor.info',['id'=>$doctor->id])}}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="doctor_name" value="{{$doctor->doctor_name}}" placeholder="Enter Your Doctor Name"  class="form-control" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <select name="department_name" id="" class="form-control">
                                            <option disabled selected>--Select A Department--</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}" {{$department->id==$doctor->department_id ? 'selected' : ''}}>{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" value="{{$doctor->phone}}"  placeholder="Enter Doctor Phone Number" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Fee</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="fee"  value="{{$doctor->fee}}" placeholder="Enter Doctor Fee" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Submit" class="form-control btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
