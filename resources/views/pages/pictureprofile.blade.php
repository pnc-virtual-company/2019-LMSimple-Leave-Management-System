@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage employee profile picture</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container containern mt-4">
        <h1 class="text-center">My personal information</h1>
        <!-- <div>
            <a href="" class=" text-info"><i class="fas fa-sign-out-alt fa-2x"></i></a>
        </div> -->
        <div class="row border border-dark rows">
            <div class="col-2 ">
                <p>ID</p>
                <p>First Name</p>
                <p>Last Name</p>
                <p>Department</p>
                <p>Position</p>
                <p>Start data</p>
            </div>
            @foreach ($employees as $employee)
            <div class="col-3">
                <p>{{$employee->id}}</p>
                <p>{{$employee->firstname}}</p>
                <p>{{$employee->lastname}}</p>
                <p>{{$employee->department->department}}</p>
                <p>{{$employee->position->position}}</p>
                <p>{{$employee->startdate}}</p>
            </div>
            @endforeach
            <div class="col-7 text-center">
                <div>
                    <img src="{{asset('images/examples/images.png')}}" class="imge" alt="images"
                        style="border:1px solid black;">
                </div>
                <div class="icons">
                
                    <a href="" class="btn btn-info "><i class="material-icons text-white">file_upload</i></a>
                    <!-- <a href=""> <i class="material-icons text-info">edit</i></a> -->
                    <!-- <a href=""> <i class="material-icons text-danger">delete</i></a> -->
                </div>
            </div>
            <p class="text">If you need to update information; please contact HR officer.</p>
        </div>


    </div>
</body>

</html>
@endsection