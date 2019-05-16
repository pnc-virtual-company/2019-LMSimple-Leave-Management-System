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
    <h1>List of position</h1><br>
    <div class="container">
        <table id="table" class="table ttable-striped table-bordered" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ( $position as $positions)
                <tr>
                    <td>
                        <a href="" data-toggle="modal" data-position="{{$positions->position}}"
                            data-id="{{$positions->id}}" data-target="#deleteModal" class="text-danger"><i
                                class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" data-position="{{$positions->position}}"
                            data-id="{{$positions->id}}" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                        {{$positions->id}}
                    </td>
                    <td>{{$positions->position}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <a href="" class="btn bg-primary" data-toggle="modal" data-target="#createModal"><i
                class="fas fa-plus-circle"></i> Create position</a>
    </div>
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
                    <small id="mPostTitle"></small>
                </div>
                <form action="" id="deleteposition" method="POST">
                    <div class="modal-footer">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                        <button type="submit" class="btn bg-primary " name="btn-delete">Yes</button>
                    </div>
                </form>
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
                <form action="{{route('position.store')}}" method="POST" id="mCreate">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Position</label>
                            <div class="col-sm-10  ">
                                <input type="text" id="createInput" placeholder="Communication officer" name="position" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary ">Ok</button>
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button></a>
                    </div>
                </form>
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
                <form action="" id="mEdit" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                       
                        <div class="form-group row">
                             <label class="col-4">ID</label>
                             <small id="inputId" class="col-7" value=""></small>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="lastname">Position</label>
                             <input class="col-7 " type="text"  id="input" name="position" required>
                        </div>
                
                    <div class="modal-footer">
                        <button type="submit" name="btn-edit" class="btn bg-primary ">Ok</button>
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "scrollY":150,
            "scrollX": true
        });
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            var url = "{{url('position')}}/" + id;
            $('#deleteposition').attr('action', url);
        })
        // edit position
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var position = button.data('position')
            var id = button.data('id')
            var modal = $(this)
            modal.find('#inputId').attr('value', id)
            modal.find('#input').attr('value', position)
            var url = "{{url('position')}}/" + id;
            $('#mEdit').attr('action', url);
        })
    });
</script>
@endsection