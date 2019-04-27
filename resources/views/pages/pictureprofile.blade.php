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
        <h1>My personal information</h1>
        <div>
            <a href="" class=" text-info"><i class="fas fa-sign-out-alt fa-2x"></i></a>
        </div>
        <div class="row border border-dark rows">
            <div class="col-2 ">
                <p>ID</p>
                <p>First Name</p>
                <p>Last Name</p>
                <p>Department</p>
                <p>Position</p>
                <p>Store data</p>
            </div>
            <div class="col-3">
                <p>108</p>
                <p>Lina</p>
                <p>Jacks</p>
                <p>External Relations Team</p>
                <p>ERO Manager</p>
                <p>15/05/2018</p>
            </div>
            <div class="col-7 text-center">
                <div>
                    <img src="{{asset('images/examples/images.png')}}" class="imge" alt="images" style="border:1px solid black;">
                </div>
                <div class="icons">
                    <a href=""><i class="fas fa-plus text-success"></i></a>
                    <a href=""> <i class="fas fa-pencil-alt text-info"></i></a>
                    <a href=""> <i class="far fa-trash-alt text-danger"></i></a>
                </div>
            </div>
            <p class="text">If you need to update information; please contact HR officer.</p>
        </div>


    </div>
</body>

</html>    
@endsection 