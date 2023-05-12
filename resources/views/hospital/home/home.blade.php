@extends('hospital.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark-subtle p-5">
                <div class="mb-4 table-responsive">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <table id="myDataTable" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Appointment No</th>
                            <th scope="col">appointment Date</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Patient Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($appointments as $appointment)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$appointment->appointment_on}}</td>
                                    <td>{{$appointment->appointment_date}}</td>
                                    <td>{{$appointment->doctor_name}}</td>
                                    <td>{{$appointment->patient_name}}</td>
                                    <td>{{$appointment->patient_phone}}</td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
