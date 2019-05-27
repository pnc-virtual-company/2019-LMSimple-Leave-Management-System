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
    <h1 class="text-center">LIST OF USERS</h1><br>
    <div class="container">
        <table id="table" class="table table-bordered">
            <thead class="text-center">
                <tr>
                   <th>@lang('ID')</th>
                   <th>@lang('Name')</th>
                   <th>@lang('Email')</th>
                   <th>@lang('Department')</th>
                   <th>@lang('Position')</th>
                   <th>@lang('Startdate')</th>
                   <th>@lang('Roles')</th>
                </tr>
            </thead>

            <tbody class="text-center"> 
                  @foreach ($users as $user)
                        <tr data-id="{{ $user->id }}">
                            <td>
                            <a href="#"  data-toggle="modal" data-placement="left" title="delete!"
                             data-name="{{$user->name}}"  data-id="{{$user->id}}" data-target="#deleteModal"><i class="material-icons text-danger">delete</i></a>

                                <a href="#" data-toggle="modal" data-placement="right" title="edit!" data-placement="left" data-target="#Edit" data-id={{$user->id}}  data-name={{$user->name}} data-email={{$user->email}}
                                 data-department_id={{$user->department_id}} data-position_id={{$user->position_id}} data-roles={{$user->roles}}  data-startdate={{$user->startdate}}>
                                  <i class="material-icons text-primary">create</i></a>
                                    <span>{{ $user->id }}</span>
                            </td>
                            <td> 
                                    <span>{!! $user->name !!}</span>
                            </td> 
                            <td> 
                                    <span>{!! $user->email !!}</span>
                            </td>
                            <td> 
                                    <span>{!! $user->department->department !!}</span>
                            </td>
                            <td> 
                                    <span>{!! $user->position->position !!}</span>
                            </td>
                            <td> 
                                    <span>{!! $user->startdate !!}</span>
                            </td>
                            <td>
                                    <span>{{ $user->roles->pluck('name')->implode(', ') }}</span>
                            </td>
                        </tr>
                    @endforeach
             
            </tbody>
        </table>
        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Create New User</button> 
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container mt-4">
                        <form action="{{action('UserController@store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group row">
                                <label class="col-4" for="name">Name</label>
                                <input class="col-7" type="text" name="name" class="form-control"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="email">Email</label>
                                <input class="col-7" type="email" name="email" class="form-control"
                                    placeholder="Email" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="password">Password</label>
                                <input class="col-7" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
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
                             <div class="form-group row">
                                <label class="col-4" for="roles[]">Roles</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" name="roles[]" id="roles">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if(!empty(old('roles'))) @if(in_array($role->id, old('roles'))) selected @endif @endif>{!! $role->name !!}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary">Create</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>

                    </div>
                </form>
                </div>
            </div> 
        </div>
        <!-- Edit modal -->
        <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container mt-4">
                        <form action="" method="post" id="modalEdit" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                            <div class="form-group row">
                                <label class="col-4" for="name">Name</label>
                                <input class="col-7" type="text" id="name" name="name" class="form-control"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="email">Email</label>
                                <input class="col-7" type="email" id="email" name="email" class="form-control"
                                    placeholder="Email" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="department">Department</label>
                                <div class="col-8" class="input-group">
                                    <!-- <input type="text" class="form-control" name="department_id" id="department_id"> -->
                                    <select class="custom-select" id="department_id" name="department_id">
                                    @foreach ($department as $items)
                                    <option value="{{$items->id}}"  @if($user->department_id==$items->id) selected @endif>{{$items->department}}</option>    
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">Position</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" id="position_id" name="position_id">
                                        @foreach ($position as $positions)
                                        <option value={{$positions->id}}>{{$positions->position}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Start Date</label>
                                <input class="col-7" type="date" id="startdate" name="startdate" class="form-control"
                                    placeholder="start-date" required>
                            </div>
                             <div class="form-group row">
                                <label class="col-4" for="roles[]">Roles</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" name="roles[]" id="roles">
                                    @foreach ($roles as $role)                          
                                    <option value="{{$role->id}}">{!! $role->name !!}</option>       
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                    </div>
                </form>
                </div>
            </div> 
        </div>

    <!-- delete modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure to delete this user?</p>
          <small id="text"></small>
        </div>
        <div class="modal-footer">
        <form id="Delete" action="" method="post">
            @method('delete')
            @csrf
          <div class="modal-footer">
          <button type="button" class="btn bg-danger" data-dismiss="modal">Cancle</button>
          <button type="submit" class="btn bg-primary">OK</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>

    </div>
    <script>
        $(document).ready(function () {
        $('#table').DataTable({
            "scrollY":300,
            "scrollCollapse": true,
        });
        $('[data-toggle="modal"]').tooltip(); 
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $('#Edit').on('show.bs.modal',function(event){
          var button = $(event.relatedTarget)
          var name = button.data('name')
          var email = button.data('email')
          var startdate = button.data('startdate')
          var department = button.data('department_id')
          var position = button.data('position_id')
          var id = button.data('id')
          var modal= $(this)
          modal.find('#name').attr('value',name)
          modal.find('#email').attr('value',email)
          modal.find('#startdate').attr('value',startdate)
          modal.find('#department_id').attr('value',department_id)
          modal.find('#position_id').attr('value',position_id)
          var url ="{{url('users')}}/"+id;
          $('#modalEdit').attr('action',url);
        });
</script> 

<script>

// delete modal


 $('#deleteModal').on('show.bs.modal',function(event){
        var button =$(event.relatedTarget)
        var name= button.data('name')
        var id= button.data('id')
        var modal =$(this)
        modal.find('#text').text(name)
        var url ="{{url('users')}}/"+id;
        $('#Delete').attr('action',url)
    });
</script>
@endsection 


