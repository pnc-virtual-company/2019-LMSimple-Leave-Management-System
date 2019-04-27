@extends('layout.app')
@section('content')
{{-- <!DOCTYPE html> --}}
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manage position</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center" >list of positions </h1>
        <table id="example" class=" table table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        10
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
                </tr>
                <tr>
                    <td>
                        11
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>WEP Training Coordinator</td>
                </tr>
                <tr>
                    <td>
                        12
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>IT Admin</td>
                </tr>
                <tr>
                    <td>
                        13
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>Educator</td>
                </tr>
                <tr>
                    <td>
                        14
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>English teacher</td>
                </tr>
                <tr>
                    <td>
                        15
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
                </tr>
                <tr>
                    <td>
                        16
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
                </tr>
                <tr>
                    <td>
                        17
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
                </tr>
                <tr>
                    <td>
                        18
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
                </tr>
                <tr>
                    <td>
                        19
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>General Manager</td>
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
                    </div>
                    <div class="modal-body">
                        Are you sure that you want to delete this position?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                       <a href="{{url('position')}}"> <button type="button" class="btn btn-danger btn-sm">Yes</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal create position -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create position</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" id="createInput"
                                        placeholder="Communication officer">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                            <a href="{{url('position')}}"> <button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Position -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit position</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="input"
                                        placeholder="12">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text"  id="input" placeholder="IT Admin">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                       <a href="{{url('position')}}"> <button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i
                class="fas fa-plus-circle"></i> Create position</a>
    </div>
</body>

</html>
@endsection   