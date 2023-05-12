@extends('hospital.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-light p-5">
                <div>
                    <form action="{{route('show.appointment')}}" method="post">
                        @csrf
                        <div>
                            <h6 class="text-dark"><label for=""> Appointment Date </label></h6>
                            <input type="date" name="appointment_date" class="form-control mt-3">
                        </div>
                        <div class="mt-3">
                            <h6 class="text-dark"><label for="">Select Department</label></h6>
                            <select name="department" id="departmentList" class="form-control mt-3">
                                <option disabled selected>--Select--</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-dark"><label for="">Select Doctor</label></h6>
                            <select name="doctor_id" id="doctorList" class="form-control mt-2">
                                <option disabled selected>--Select--</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" class='parent-{{ $doctor->department_id }} allDoctor'>{{ $doctor->doctor_name }}</option>
                                @endforeach

{{--                                @foreach($doctors as $doctor)--}}
{{--                                    <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>

                        <div class="mt-2">
                            <h6 class="text-success">Available</h6>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-dark"><label for="">Fee</label></h6>
                            <input type="number" name="fee"  class="form-control mt-2">
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
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; $sum=0 @endphp
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$appointment->attributes->appointment_date}}</td>

                                <td>{{$appointment->attributes->doctor_id}}</td>
                                <td>{{$appointment->attributes->fee}}</td>
                                <td>
                                    <a href="{{route('remove.appointment',['id'=>$appointment->id])}}" class="btn btn-danger" title="Delete" id="delete" ><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            @php $i++; $sum += ($appointment->attributes->fee) @endphp
                        @endforeach


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
                    <form action="{{route('store.appointment')}}" id="form" method="post">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <h6 class="text-dark">Patient Information</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-control">
                                <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Patient Name" aria-label="First name">
                                <div class="error"></div>
                            </div>
                            <div class="col input-control">
                                <input type="text" class="form-control" id="patient_phone" name="patient_phone" placeholder="Patient Phone" aria-label="Last name">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <h6 class="text-dark">Payment</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-control">
                                <input type="text" class="form-control" disabled @php if ($sum==0) $sum=null  @endphp value="{{$sum}}" id="total_fee" name="total_fee" placeholder="Total Fee" aria-label="First name">
                                <div class="error"></div>
                            </div>
                            <div class="col input-control">
                                <input type="text" class="form-control" id="paid_amount" name="paid_amount" placeholder="Paid Amount" aria-label="Last name">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="row mt-2 px-2">
                            <input type="submit" class="btn btn-primary" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')

    <script>
        $('#departmentList').on('change', function () {
            $("#doctorList").attr('disabled', false); //enable subcategory select
            $("#doctorList").val("");
            $(".allDoctor").attr('disabled', true); //disable all category option
            $(".allDoctor").hide(); //hide all subcategory option
            $(".parent-" + $(this).val()).attr('disabled', false); //enable subcategory of selected category/parent
            $(".parent-" + $(this).val()).show();
        });
    </script>

    <script>
        const patient_name = document.getElementById('patient_name');
        const patient_phone = document.getElementById('patient_phone');
        const total_fee = document.getElementById('total_fee');
        const paid_amount = document.getElementById('paid_amount');

        const setError = (element, message) => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = message;
            inputControl.classList.add('error');
            inputControl.classList.remove('success')
        }
        const setSuccess = element => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = '';
            inputControl.classList.add('success');
            inputControl.classList.remove('error');
        };

        var formX = document.getElementById('form');
        formX.onsubmit = function () {
            event.preventDefault();
            if (validateInputs())
            {
                formX.submit();
            }
        }

        function validateInputs() {
            const patientName = patient_name.value.trim();
            const patientPhone = patient_phone.value.trim();
            const totalFee = total_fee.value.trim();
            const paidAmount = paid_amount.value.trim();

            if(patientName === '') {
                setError(patient_name, 'Please Enter Your Patient Name');
                return false;
            } else {
                setSuccess(patient_name);
            }

            if(patientPhone === '') {
                setError(patient_phone, 'Please Enter Your Patient Phone Number');
                return false;
            } else {
                setSuccess(patient_phone);
            }

            if(totalFee === '') {
                setError(total_fee, 'Please Add Appointment Info');
                return false;
            } else {
                setSuccess(total_fee);
            }

            if(paidAmount === '') {
                setError(paid_amount, 'Please Enter Total Fee');
                return false;
            } else if (paidAmount !== totalFee) {
                setError(paid_amount, "Total Fee doesn't match");
                return false;
            } else {
                setSuccess(paid_amount);
            }
            return true;
        }
    </script>
@endsection
