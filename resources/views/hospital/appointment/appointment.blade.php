@extends('hospital.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-light p-5">
                <div>
                    <form>
                        <div>
                            <label for=""> <h6 class="text-dark">Appointment Date</h6> </label>
                            <input type="date" class="form-control mt-2">
                        </div>
                        <div class="mt-3">
                            <label for=""><h6 class="text-dark">Select Department</h6></label>
                            <select name="" id="" class="form-control mt-2">
                                <option disabled selected>--Select--</option>
                                @foreach($departments as $department)
                                    <option value="">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for=""><h6 class="text-dark">Select Doctor</h6></label>
                            <select name="" id="" class="form-control mt-2">
                                <option disabled selected>--Select--</option>
                                @foreach($doctors as $doctor)
                                    <option value="">{{$doctor->doctor_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <h6 class="text-success">Available</h6>
                        </div>
                        <div class="mt-3">
                            <label for=""><h6 class="text-dark">Fee</h6></label>
                            <input type="number" disabled class="form-control mt-2">
                        </div>
                        <div class="mt-3">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 bg-dark-subtle p-5">
                <div class="mb-4 table-responsive">
                    <table id="myDataTable" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Department</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>reitj</td>
                            <td>reitj</td>
                            <td>reitj</td>
                            <td>reitj</td>
                            <td>reitj</td>
                            <td>reitj</td>
                        </tr>
                        {{--                    @php $i=1; @endphp--}}
                        {{--                    @foreach($doctors as $doctor)--}}
                        {{--                        <tr>--}}
                        {{--                            <th scope="row">{{$i}}</th>--}}
                        {{--                            <td>{{$doctor->doctor_name}}</td>--}}
                        {{--                            <td>{{$doctor->department['name']}}</td>--}}
                        {{--                            <td>{{$doctor->fee}}</td>--}}
                        {{--                            <td>--}}
                        {{--                                <a href="{{route('edit.doctor.info',['id'=>$doctor->id])}}" class="btn btn-info" title="Edit"><i class="fa fa-pencil-square"></i></a>--}}
                        {{--                                <a href="{{route('delete.doctor.info',['id'=>$doctor->id])}}" class="btn btn-danger" title="Delete" id="delete" ><i class="fa fa-trash"></i></a>--}}
                        {{--                            </td>--}}
                        {{--                        </tr>--}}
                        {{--                        @php $i++ @endphp--}}
                        {{--                    @endforeach--}}
                        </tbody>
                    </table>
                </div>
                <div class="p-3 bg-white mt-5">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark">Patient Information</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Patient Name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Patient Phone" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6 class="text-dark">Payment</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" disabled placeholder="Total Fee" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Paid Amount" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-2 px-2">
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
