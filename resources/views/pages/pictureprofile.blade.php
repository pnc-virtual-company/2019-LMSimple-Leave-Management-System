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
        <div class="row border border-dark rows">
            <div class="col-2 ">
                <p>ID</p>
                <p>First Name</p>
                <p>Department</p>
                <p>Position</p>
                <p>Start Date</p>
            </div>
            <div class="col-3">
                <p>{{Auth::user()->id}}</p>
                <p>{{Auth::user()->name}}</p>
                <p>{{Auth::user()->department->department}}</p>
                <p>{{Auth::user()->position->position}}</p>
                <p>{{Auth::user()->startdate}}</p>
            </div>
            <div class="col-7 text-center">
                <div>
                    <img src="{{url('storage/img/'.\Auth::user()->profile)}}" class="imge" alt="images"
                        style="border:1px solid black;">
                </div>
                <div>
                <form action="{{url('/pf')}}" method="post" enctype="multipart/form-data">
                @csrf
                 <div>
                    <input type="file" name="inputFile" style="margin-left:260px">
                </div>
                <button type="submit"  class="btn btn-info ml-auto">Save</button>
                </form>
                </div>
            </div>
            <p class="text">If you need to update information; please contact HR officer.</p>
        </div>
    </div>
</body>

</html>
@endsection