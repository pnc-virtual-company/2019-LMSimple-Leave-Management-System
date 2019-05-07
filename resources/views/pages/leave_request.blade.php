@extends('layout.app')
@section('content')
{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Leave Request</title>
     

    <link rel="stylesheet" href="{{asset('css/leave_request.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('jquery.min.js')}}"></script>
    <script src="{{asset('jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dataTables.bootstrap4.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"

        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('request_id')}}">
</head>
<body>
    <div class="container mt-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration (Days)</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                   
             @foreach ( $item as $items)

                <tr>

                    <td><a href="{{route('leave_request.create')}}">Sovannthai</a></td>                 
                    <td>{{$items->start}}</td>
                    <td>{{$items->end}}</td>
                    <td>{{$items->duration}}</td>
                    <td>{{$items->vocation}}</td>
                    <td>{{$items->plan}}</td>
                </tr>

              @endforeach
              
            </tbody>
        </table>
        <button type="button" class=" btn bg-primary" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo"> <i class="material-icons flaot-left">add</i>Create Leave Request</button> 
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Leave Request</h5>
                    </div>
                    <div class="container mt-4">
                       <form action="{{url('LeaveRequestController@store')}}" method="POST"> 
                          @csrf

                            <div class="form-group row">
                                <label class="col-4" for="firstname">Start Date</label>
                                <input class="col-4" type="date" name="firstname" class="form-control"
                                    placeholder="start date" required>
                                <div class="col-4" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>The Morning</option>
                                        <option value="1">Afternoon</option>
                                        <option value="2">Everning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">End Date</label>

                                <input class="col-4" type="date" name="firstname" class="form-control"

                                    placeholder="end date" required>
                                <div class="col-4" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>The Morning</option>
                                        <option value="1">Afternoon</option>
                                        <option value="2">Everning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Duration</label>
                                <input class="col-4" type="text" name="durations" class="form-control"
                                    placeholder="Duration" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="leave">Leave Types</label>
                                <div class="col-5" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04s">
                                        <option selected>Vocation</option>
                                        <option value="1">Training</option>
                                        <option value="2">Sick Leave</option>
                                        <option value="3">Accross The Rever</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Comments</label>

                                <p><textarea class="col-7" name="comment" id="" cols="35"
                                    rows="" class="form-control" >comments....</textarea></p>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>

                    <a href=""><button type="submit" class="btn bg-primary">OK</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "scrollY": "300px",
            "scrollCollapse": true,

        });
    });
</script>

@endsection   
   

