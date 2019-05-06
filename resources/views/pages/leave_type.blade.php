@extends('layout.app')
@section('content')
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
    <h1>Type of leave</h1><br>
    <div class="container">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Leav Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($pages as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->leave_type}}</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#deleteModal"  data-id="{{$item->id}}" data-leave_type="{{$item->leave_type}}">
                        <i class="material-icons text-danger">delete</i> </a>

                        <a href="" data-toggle="modal" data-target="#editModal"  data-id="{{$item->id}}" data-leave_type="{{$item->leave_type}}">
                        <i class="material-icons text-info">edit</i></a>

                    </td>
                </tr>
               
         @endforeach   
            </tbody>
        </table>

    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="material-icons flaot-left">add</i>Create type Request</a>
     </button>

   {{--delete Model  --}}
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to delete this missage?
                            <small id="mPostTitle"></small>
                        </div>
                        <form id="mDelete" action="" method="POST">
                                @method('DELETE')
                                @csrf
                        <div class="modal-footer">
                          <button type="submit" class="btn bg-primary" name="position">Ok</button>
                          <button type="submit" class="btn btn-danger"  data-dismiss="modal">No</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>
{{-- edit modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <form action="" method='POST' id="mEdit">
                                    @csrf
                                    @method('PATCH')
                            <div class="form-group">
                                <label for="">ID</label><br>
                                <input type="text" class="form-control" placeholder="205" id="inputId" name="id" value=""  required>
                            </div>
                            <div class="form-group">
                                <label for="">Leave type</label><br>
                                <input type="text" placeholder="edit" class="form-control" name="leave_type" id="inputLeave" value="" required>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary"  name="edit">Ok</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button></a>
                    </div>
                </form>
                </div>
            </div>
        </div>

    {{-- create modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Create Position</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{route('leave_type.store')}}" method="post">
            @csrf
            <div class="modal-body">
                 <div class="form-group">
                    <label for="">Position</label><br>
                    <input type="text" placeholder="Create Position" name="create" class="form-control" required></div>    
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn bg-primary">Ok</button>
              <button type="button" class="btn btn-danger data-dismiss="modal"">Cencel</button>
            </div>
        </form>
          </div>
        </div>
      </div>

    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "scrollY": 300,
            "scrollX": true
        });
    });

    $('#deleteModal').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget)
    var postTitle = button.data('leave_type')
    var id = button.data('id')
    var modal= $(this)
    modal.find('#mPostTitle').text(postTitle)
    var url ="{{url('leave_type')}}/"+id;
    $('#mDelete').attr('action',url);
  });

  $('#editModal').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var leave_type = button.data('leave_type')
    var modal= $(this)
    modal.find('#inputId').attr('value',id)
    modal.find('#inputLeave').attr('value',leave_type)
    var url ="{{url('leave_type')}}/"+id;
    $('#mEdit').attr('action',url);
  });

</script>
 
@endsection