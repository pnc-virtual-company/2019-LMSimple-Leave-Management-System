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
                        <p>15/05/2019(morning)</p>
                        <p>17/05/2019(afternoon)</p>
                        <p>3 days</p>
                        <p>Vacation</p>
                    </div>
                    <div class="col-3">
                        <p>Comment</p>
                        <br><br><br><br>
                        <p>Status</p>
                    </div>
                    <div class="col-3">

                        <p> <textarea name="" id="" cols="21" rows="3">OFF</textarea></p>

                        <br>
                        <br>
                        <p>Phaned</p>
                    </div>
                </div>
            </div>
            <footer>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{url('/information')}}" class="btn btn-info flaot-right"><i
                                class="material-icons flaot-left">check</i>Submit Leave Request</a>
                        <button type="button" class="btn btn-danger btn-center"> <i
                                class="material-icons flaot-left">close</i>Cencel Leave Request</button>
                        <button type="button" class="btn btn-primary"> <i
                                class="material-icons flaot-left">chevron_left</i>Back To List</button>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>

@endsection