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
               
                    
                
                <tr>
                    <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteModal" class="text-danger"><i
                                        class="far fa-trash-alt"></i></a>
                        <a href="" data-toggle="modal" data-target="#editModal" class="text-info"><i
                                        class="fas fa-pencil-alt"></i></a>
                    </td>
                   <td>1</td>
                    <td>Trianing&Education Team</td>
                   
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
                     <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
                     <button type="button" class="btn btn-info btn-sm">Yes</button>
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
                     <button type="button" class="btn btn-danger">Cancel</button>
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
                     <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                     <button type="button" class="btn btn-danger">Cancel</button>
                 </div>
             </div>
         </div>
     </div>
     <a href="#" class="btn btn-info" data-toggle="modal" data-target="#createModal"><i
             class="fas fa-plus-circle"></i> Create Department</a>
 </div>

</body>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            
        });
    });
</script> 
@endsection 


