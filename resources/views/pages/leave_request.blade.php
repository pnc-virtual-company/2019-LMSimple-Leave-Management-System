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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"

        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('request_id')}}"> 
</head>
<body>
<h1 class="text-center">LIST OF LEAVE REQUESTS</h1>
    <div class="container mt-4">
        <table id="request" class="table table-striped table-bordered" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th hidden>ID</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration (Days)</th> 
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="text-center">

             @foreach ($reqest as $items)

                <tr>
                    <td hidden>{{$items->id}}</td>
                    <td><a href="{{route('leave_request.create')}}">{{$items->user->name}}</a></td>
                    <td>{{$items->startdate}}</td>
                    <td>{{$items->enddate}}</td>
                    <td>{{$items->duration}}</td>
                    <td>{{$items->leave_type->leave_type}}</td>
                    <td>{{$items->comment}}</td>
                </tr>

              @endforeach

            </tbody>
        </table>
        <button type="button" class=" btn bg-primary" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo"> <i class="fas fa-plus-circle "></i> Create Leave Request</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Leave Request</h5>
                    </div>
                    <div class="container mt-4">
                       <form action="{{action('LeaveRequestController@store')}}" method="POST">
                          @csrf
                          <div class="form-group row">
                                    <label class="col-4" for="leave">Employee Name</label>
                                    <div class="col-5" class="input-group">
                                            <select class="custom-select" name="user_id">
                                                @foreach ($user as $item)   
                                                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                     </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname" >Start Date</label>
                                <input class="col-4" type="date" data-date=""  data-date-format="DD-YY-MM" name="startdate"  class="form-control"
                                    placeholder="start date" required>
                                <!-- <div class="col-4" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="leave_type_id">
                                        <option selected>The Morning</option>
                                        <option value="1">Afternoon</option>
                                        <option value="2">Everning</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="enddate">End Date</label>

                                <input class="col-4" type="date" data-date="" data-date-format="DD-MM-YY" name="enddate" class="form-control"

                                    placeholder="end date" required>
                                <!-- <div class="col-4" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="leave_type_id">
                                        <option selected>The Morning</option>
                                        <option value="1">Afternoon</option>
                                        <option value="2">Everning</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Duration</label>
                                <input class="col-4" type="text" name="duration" class="form-control"
                                    placeholder="Duration" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="leave">Leave Types</label>
                                <div class="col-5" class="input-group">
                                <select class="custom-select" id="inputGroupSelect04s" name="leave_type_id">
                                    @foreach ($leave_type as $reqest)
                                    <option value="{{$reqest->id}}">{{$reqest->leave_type}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                       <button type="submit" class="btn bg-primary">Create</button>
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function () {
        $('#request').DataTable({
            "scrollY":300,
            "scrollCollapse": true,
        });
    });
</script>

@endsection
