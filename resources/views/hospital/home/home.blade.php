@extends('hospital.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark-subtle p-5">
                <div class="mb-4 table-responsive">
                    <table id="myDataTable" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Appointment No</th>
                            <th scope="col">appointment Date</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Patient Phone</th>
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
            </div>
        </div>
    </div>
</section>
@endsection
