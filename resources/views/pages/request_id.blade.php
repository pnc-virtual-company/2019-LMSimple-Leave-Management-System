@extends('layout.app')
@section('content')
{{-- <!DOCTYPE html> --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leave Requst ID</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/request_id.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div>
        <div class="container mt-5 cont">
            <div>
                <div class="row row1 text-center">
                    <div class="col-3">
                        <p>Start date</p>
                        <p>End date</p>
                        <p>Duration</p>
                        <p>Leave type</p>
                    </div>

                    <div class="col-3">

                        <p>{{$request_show->startdate}}</p>
                        <p>{{$request_show->enddate}}</p>
                        <p>{{$request_show->duration}}</p>
                        <p>{{$request_show->leave_type->leave_type}}</p>

                    </div>
        
                    <div class="col-3">

                        <p>Comment</p>
                        <br><br><br>
                        <p>Status</p>

                    </div>
                    <div class="col-3">
                        <p> <textarea name="comment" id="" cols="22" rows="">somethings....</textarea></p><br>
                        <p> <textarea name="status" id="" cols="22" rows="">somethings....</textarea></p><br>
                    </div>
                </div>
            </div>
            <footer>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{url('/information')}}" class="btn bg-primary flaot-right"><i
                                class="material-icons flaot-left">check</i>Submit Leave Request</a>
                        <a href="{{url('/leave_request')}}" class="btn bg-danger flaot-right"><i
                                class="material-icons flaot-left">check</i>Cencel Leave Request</a>
                        <a href="{{url('/leave_request')}}" class="btn bg-success flaot-right"><i
                                class="material-icons flaot-left">check</i>Back To Listt</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>

@endsection