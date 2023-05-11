<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Appointment</title>
    <link rel="stylesheet" href="{{asset('hospital/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" >


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="{{asset('hospital/assets/js/script.js')}}"></script>


</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand text-info">Doctor Appointment</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('home')}}" class="nav-link active">Home</a></li>
                <li><a href="{{route('add.doctor')}}" class="nav-link">Doctor</a></li>
                <li><a href="{{route('appointment')}}" class="nav-link">Appointment</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="{{asset('hospital/assets/js/bootstrap.bundle.min.js')}}"></script>



<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myDataTable');
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('hospital/assets/js/code.js')}}"></script>

</body>
</html>
