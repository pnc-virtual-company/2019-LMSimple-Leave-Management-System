@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                
            });
        });
    </script>
</head>

<body>
    <div class="container mt-4">
        <h1>List Of Department</h1>
        <table id="example" class=" table table-bordered" >
            <thead>
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Department</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>1</td>
                    <td>Training & Education Team</td>
                </tr>
                <tr>
                    <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>2</td>
                    <td>External Relation Team</td>
                </tr>
                <tr>
                    <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>3</td>
                    <td>Admin/Fanance Team</td>
                </tr>
                <tr>
                    <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>4</td>
                    <td>Selection Team</td>
                </tr>
            
                  
            </tbody>
        </table>
        <!-- modal delete  -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure that you want to delete this department?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary btn-sm">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal create department -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="createInput"
                                        placeholder="Training & Education Team">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                        <button type="button" class="btn btn-danger">Concel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Department -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="input"
                                        placeholder="1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input" placeholder="Training & Education Team">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                        <button type="button" class="btn btn-danger">Concel</button>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i
                class="fas fa-plus-circle"></i> Create Department</a>
    </div>
</body>

</html>   
@endsection   