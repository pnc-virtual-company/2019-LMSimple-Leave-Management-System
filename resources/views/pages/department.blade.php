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
    <h1 class="text-center">List Department</h1><br>
    <div class="container">
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Department</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $item as $items)
                

                <tr>
                    <td>
                        
                    <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger" data-department="{{$items->department}}" data-id="{{$items->id}}"><i
                                        class="far fa-trash-alt"></i></a>
                    <a href="" data-toggle="modal" data-target="#editModal" class="text-info" data-department="{{$items->department}}" data-id="{{$items->id}}"><i
                                        class="fas fa-pencil-alt" ></i></a>
                      
                    </td>
                   <td>{{$items->id}}</td>
                    <td>{{$items->department}}</td>
                   
                </tr>
                @endforeach
             
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
                     
                     <p>Are you sour to delete this department?</p>
                     <small id="mPostTitle"></small>
                 </div>
                 <form action="" method="POST" id="mDelete">
                    @csrf
                    @method('DELETE')
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>

                     <button type="submit" class="btn bg-primary btn-sm">Yes</button>

                 </div>
                </form>
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
                 
                    <form action="{{action('departmentController@store')}}" method="POST"> 
                    @csrf
                    
                 <div class="modal-body">
                     
                         <div class="form-group">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Department</label>
                             <div class=" form-group">
                                 <input type="text" class="form-control" id="createInput"
                                      name="department" required>
                             </div>
                         </div>
                    
                 </div>
                
                 <div class="modal-footer">

                     <button type="submit" class="btn bg-primary" >Ok</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                 </div>
                </form>
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
                 <form action="" method="POST" id="mEdit">
                   @csrf
                   @method('PATCH')
                 <div class="modal-body">
                     <div class="form-group ">
                             <label for="input" class="col-sm-2 col-form-label">ID</label>
                             <div class="form-group">
                                <input type="text" name="id" id="inputId" value="" class="form-control">
                                
                             </div>
                         </div>
                         <div class="form-group ">
                             <label for="input" class="col-sm-2 col-form-label">Department</label>
                             <div class="form-group ">
                                 <input type="text" class="form-control" id="input" name="department" placeholder="Training & Education Team"  value="">
                             </div>
                         </div>
                   
                 </div>
                
                 <div class="modal-footer">

                     <button type="submit" class="btn bg-primary" >Ok</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                 </div>
                </form>
             </div>
         </div>
     </div>

     <a href="#" class="btn bg-primary" data-toggle="modal" data-target="#createModal"><i

             class="fas fa-plus-circle"></i> Create Department</a>
 </div>

</body>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            
        });
    });
</script> 
<script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#deleteModal').on('show.bs.modal',function(event){
          var button = $(event.relatedTarget)
          var postTitle = button.data('department')
          var id = button.data('id')
          var modal= $(this)
          modal.find('#mPostTitle').text(postTitle)
          var url ="{{url('department')}}/"+id;
          $('#mDelete').attr('action',url);
        })

        $('#editModal').on('show.bs.modal',function(event){
          var button = $(event.relatedTarget)
          var department = button.data('department')
          var id = button.data('id')
          var modal= $(this)
          modal.find('#inputId').attr('value',id)
          modal.find('#input').attr('value',department)
          var url ="{{url('department')}}/"+id;
          $('#mEdit').attr('action',url);
        })
    </script>


@endsection 


