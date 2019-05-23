@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Manager</title>
    <link rel="stylesheet" href="{{asset('css/manager.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center">LIST OF EMPLOYEES</h1><br>
    <div class="container">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Start date</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($employees as $item)
                    <tr> 
                        <td>
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                        class="material-icons">delete</i></a>
                            <a href="" data-toggle="modal" data-target="#Edit" data-id="{{$item->id}} data-firstname={{$item->firstname}} data-lastname={{$item->lastname}}" data-startdate="{{$item->startdate}} data-department_id={{$item->department_id}}" data-position_id="{{$item->position_id}}" data-whatever="@mdo">
                                <i class="material-icons text-primary">edit</i></a>
                            {{$item->id}}</td> 
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td> 
                        <td>{{$item->department->department}}</td>
                        <td>{{$item->position->position}}</td>
                        <td>{{$item->startdate}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <button type="submit" class="btn bg-primary" data-toggle="modal" data-target="#exampleModal"

            data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Create Employee</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container mt-4">
                        <form action="{{action('ManagerController@store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <div>
                                    <img src="{{asset('images/wedding.jpg')}}" alt="wedding" style="border:1px solid black; width:150px;heigh:200px">
                                    </div>
                                    <input type="file" name="profile" class="form-control-file">
                                    {{-- <div class="icons">
                                        <a href=""><i class="fas fa-plus text-success"></i></a>
                                        <a href=""> <i class="fas fa-pencil-alt text-info"></i></a>
                                        <a href=""> <i class="far fa-trash-alt text-danger"></i></a>
                                    </div> --}}
                                </div>    
                            <div class="form-group row">
                                <label class="col-4" for="firstname">Name</label>
                                <input class="col-7" type="text" name="name" class="form-control"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="lastname">Last Name</label>
                                <input class="col-7" type="text" name="lastname" class="form-control"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="department">Department</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" name="department_id">
                                    @foreach ($department as $items)
                                    <option value="{{$items->id}}">{{$items->department}}</option>    
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">Position</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" name="position_id">
                                        @foreach ($position as $positions)
                                    <option value={{$positions->id}}>{{$positions->position}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Start Date</label>
                                <input class="col-7" type="date" name="startdate" class="form-control"
                                    placeholder="start-date" required>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-4" for="manager">Manager</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>Banjimin</option>
                                        <option value="1">Sareoum</option>
                                        <option value="2">Thalai</option>
                                        <option value="3">Vothy</option>
                                    </select>

                                </div>
                            </div> --}}
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-info">OK</button>

                    </div>
                </form>
                </div>
            </div> 
        </div>
    </div>
    <!-- Alert Edit -->
    <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="container mt-4">
                    <form action="" method="post" id="modalEdit">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label class="col-4" for="firstname">Name</label>
                            <input class="col-7" type="text" id="firstname" name="firstname" class="form-control"
                                placeholder="First Name" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="department">Department</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="department_id">
                                    @foreach ($department as $departments)                                        
                                        <option value="{{$departments ->id}}">{{$departments->department}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="firstname">Position</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="position_id">
                                        @foreach ($position as $positions)                                        
                                            <option value="{{$positions ->id}}">{{$positions->position}}</option>
                                        @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="date">Start Date</label>
                            <input class="col-7" type="date" id="startdate" name="startdate" class="form-control"
                                placeholder="start-date" required>
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-4" for="manager">Manager</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Banjimin</option>
                                    <option value="1">Sareoum</option>
                                    <option value="2">Thalai</option>
                                    <option value="3">Vothy</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                            <button type="submit" class="btn bg-primary">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "scrollY":150,
            "scrollCollapse": true,
        });
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $('#Edit').on('show.bs.modal',function(event){
          var button = $(event.relatedTarget)
          var firstname = button.data('firstname')
          var lastname = button.data('lastname')
          var startdate = button.data('startdate')
          var department = button.data('department_id')
          var position = button.data('position_id')
          var id = button.data('id')
          var modal= $(this)
          modal.find('#firstname').attr('value',firstname)
          modal.find('#lastname').attr('value',lastname)
          modal.find('#startdate').attr('value',startdate)
          modal.find('#department_id').attr('value',department_id)
          modal.find('#position_id').attr('value',position_id)
          var url ="{{url('manager')}}/"+id;
          $('#modalEdit').attr('action',url);
        })
</script>
@endsection
