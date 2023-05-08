@extends('hospital.master')
@section('content')

    <section class="py-3 bg-light">
        <div class="container">
            <table id="myDataTable" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php $i=1; @endphp
                @foreach($doctors as $doctor)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$doctor->doctor_name}}</td>
                    <td>{{$doctor->department['name']}}</td>
                    <td>{{$doctor->fee}}</td>
                    <td>
                        <a href="{{route('edit.doctor.info',['id'=>$doctor->id])}}" class="btn btn-info" title="Edit"><i class="fa fa-pencil-square"></i></a>
                        <a href="{{route('delete.doctor.info',['id'=>$doctor->id])}}" class="btn btn-danger" title="Delete" id="delete" ><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @php $i++ @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
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
                        <form method="post" action="{{route('store.doctor.info')}}">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_name" placeholder="Enter Your Doctor Name"  class="form-control" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <select name="department_name" id="" class="form-control">
                                        <option disabled selected>--Select A Department--</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone"   placeholder="Enter Doctor Phone Number" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Fee</label>
                                <div class="col-sm-10">
                                    <input type="number" name="fee"   placeholder="Enter Doctor Fee" class="form-control">
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
