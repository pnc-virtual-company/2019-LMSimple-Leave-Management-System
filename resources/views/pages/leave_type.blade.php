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
    {{-- <script src="{{asset('js/jquery-3.3.1.js')}}"></script> --}}
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">

   
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>40</td>
                    <td>teacher</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>student</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                         <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>trainer</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>admin</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>teacher</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i> </a>
                    </td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>student</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>

                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>teacher</td>
                    <td>

                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                         <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>trainer</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>trainer</td>
                    <td>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#delete" "> 
                        <i class="material-icons">delete</i> </a>
                        <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                        <i class="material-icons">edit</i>   </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">add</i>Create Leave Type
        </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">

                      
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Leave type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Leave type</label><br>
                                <input type="text" placeholder="Create type leave" class="form-control" name="create"
                                    required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                      <button type="button" class="btn btn-info">Cencel</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comfirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  Are You Sure want to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-info">No</button>

            
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Leave type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">ID</label><br>
                                <input type="text" class="form-control" placeholder="205" required>
                            </div>
                            <div class="form-group">
                                <label for="">Leave type</label><br>
                                <input type="text" placeholder="edit" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                        <button type="button" class="btn btn-info">Cencel</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "scrollY": 300,
            "scrollX": true
        });
    });
</script>
@endsection