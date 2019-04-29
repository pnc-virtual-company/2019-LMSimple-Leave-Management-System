@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     
    <link rel="stylesheet" href="{{asset('css/leave_request.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('jquery.min.js')}}"></script>
    <script src="{{asset('jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dataTables.bootstrap4.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</head>

<body>

    <div class="container mt-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration (Days)</th>
                    <th>Type</th>
                    <th>Status</th>


                </tr>
            </thead>
            <tbody>

                <tr>

                    <td>
                     <a href=#" data-toggle="modal" data-target="#delete" "> 
                    <i class="material-icons">delete</i></a>
                    <a href=" class="btn btn-primary" data-toggle="modal" data-target="#edit" "> 
                    <i class="material-icons">edit</i></a>
                    </td>
                    <td>2009/06/25</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                </tr>
                <tr>

                    <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                              
                    <td>2011/12/12</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                   
                </tr>
                <tr>

                        <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2010/09/20</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                  
                </tr>
                <tr>

                        <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2009/10/09</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                  
                </tr>
                <tr>

                        <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2010/12/22</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                   
                </tr>
                <tr>

                        <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2010/11/14</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                  
                </tr>
                <tr>

                        <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2011/06/07</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                </tr>
                <tr>
                    <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2010/03/11</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                </tr>
                <tr>
                    <td><a href="#" data-toggle="modal" data-target="#number" "> 1014</a></td>
                    <td>2011/05/03</td>
                    <td>2009/06/25</td>
                    <td>6</td>
                    <td>Vacation</td>
                    <td>Planed</td>
                    
                </tr>

            </tbody>
        </table>

        <div class="modal fade" id="number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Comfirm</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        <div class="column" style="background-color:#bbb;">
                            <form>
                             <h6>Stat Date 05/05/2019 (morning)</h6>
                             <br>
                                <h6>End Date 05/05/2019(afternoon)</h6>
                            <br>
                                 <h6> Duration 3 days</h6>
                            <br>
                                  <h6>Leave Type Vication</h6>
                              

                    </form>
                  </div>
                  <div class="column" style="background-color:#bbb;">
                    <h6>Comment OFF</h6>
                    <br><br><br>
                    <h6>Employee  Lina Jack</h6>
                    <br>
                    <h6>Status Request</h6>
                    
                  </div>
                    </div>
          
            <div class="panel-footer">
                  
                    <button type="button" class="btn btn-primary"> <i class="material-icons flaot-left">check</i>Accept </button>
                    <button type="button" class="btn btn-warning" >  <i class="material-icons flaot-left">close</i>Reject</button>
                   
                   <button type="button" class="btn btn-info" > <i class="material-icons flaot-left">chevron_left</i>Create</button>
    
                      
                </div>
        

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                      <button type="button" class="btn btn-primary">Cencel</button>
                    </div>
                  </div>
                </div>
              </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo"><i class="fas fa-plus-circle"></i>Create Leave Request</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Leave Request</h5>

                    </div>
                    <div class="container mt-4">
                        <form action="#" method="post">
                            <div class="form-group row">
                                 <label class="col-4" for="firstname">ID</label>
                                 <p class="col-4">001</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">Start Date</label>
                                <input class="col-4" type="text" name="firstname" class="form-control"
                                    placeholder="start date" required>
                                    <div class="col-4" class="input-group">
                                            <select class="custom-select" id="inputGroupSelect04">
                                                <option selected>The Morning</option>
                                                <option value="1">Afternoon</option>
                                                <option value="2">Everning</option>
                                              
                                            </select>
        
                                        </div>   
                            </div>
                            <div class="form-group row">
                                    <label class="col-4" for="firstname">End Date</label>
                                    <input class="col-4" type="text" name="firstname" class="form-control"
                                        placeholder="end date" required>
                                        <div class="col-4" class="input-group">
                                                <select class="custom-select" id="inputGroupSelect04">
                                                    <option selected>The Morning</option>
                                                    <option value="1">Afternoon</option>
                                                    <option value="2">Everning</option>
                                                  
                                                </select>
            
                                            </div>   
                                </div>
                
                            <div class="form-group row">
                                <label class="col-4" for="date">Duration</label>
                                <p class="col-4"> 3     Days</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="leave">Leave Types</label>
                                <div class="col-5" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04s">
                                        <option selected>Vocation</option>
                                        <option value="1">Training</option>
                                        <option value="2">Sick Leave</option>
                                        <option value="3">Accross The Rever</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-4" for="date">Comments</label>
                                    <textarea class="col-7" name="comment" id="" cols="5" rows="5">comment somethings</textarea>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                        <a href="index.html"><button class="btn btn-primary">OK</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

 <script>
    $(document).ready(function () {
        $('#example').DataTable({
            "scrollY": "200px",
            "scrollCollapse": true,

        });
    });
</script>


@endsection   