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
    <h1>Employee Manager</h1><br>
    <div class="container">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Start date</th>
                    <th>Manager</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        001</td>
                    <td>Tiger Nixon</td>
                    <td>Architect</td>
                    <td>WEB Trainer</td>
                    <td>Teacher</td>
                    <td>2011/04/25</td>
                    <td>Banjimin</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        002</td>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>Kkaka</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        003</td>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>Opana</td>
                    <td>2009/01/12</td>
                    <td>thaina</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        004</td>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>YALKA</td>
                    <td>2012/03/29</td>
                    <td>Othafa</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        005</td>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>yakay</td>
                    <td>2008/11/28</td>
                    <td>Kalfa</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        006</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>opapanak</td>
                    <td>2012/12/02</td>
                    <td>kayaed</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        007</td>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>phalka</td>
                    <td>2012/08/06</td>
                    <td>daka</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        008</td>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>yala</td>
                    <td>2010/10/14</td>
                    <td>Kaoka</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        009</td>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>Ierk</td>
                    <td>2009/09/15</td>
                    <td>mkaja</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        010</td>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>Hake</td>
                    <td>2008/12/13</td>
                    <td>halewl</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        011</td>
                    <td>Jena </td>
                    <td>Gaines</td>
                    <td>London</td>
                    <td>teajjer</td>
                    <td>2008/12/19</td>
                    <td>banaka</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        012</td>
                    <td>Quinn </td>
                    <td>Flynn</td>
                    <td>English</td>
                    <td>Teacher</td>
                    <td>2013/03/03</td>
                    <td>Sopheak</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        013</td>
                    <td>Marshall</td>
                    <td>Charde</td>
                    <td>WEB</td>
                    <td>Teacher</td>
                    <td>2008/10/16</td>
                    <td>Rith</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        014</td>
                    <td>Haley</td>
                    <td>Kennedy</td>
                    <td>WEB</td>
                    <td>Designer</td>
                    <td>2012/12/18</td>
                    <td>Banjimin</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        015</td>
                    <td>Tatyana </td>
                    <td>Regional</td>
                    <td>Seletion</td>
                    <td>Manager</td>
                    <td>2010/03/17</td>
                    <td>Thaina</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        016</td>
                    <td>Michael </td>
                    <td>Silva</td>
                    <td>SNA</td>
                    <td>Teacher</td>
                    <td>2012/11/27</td>
                    <td>Vothy</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        017</td>
                    <td>Tatyana </td>
                    <td>Regional</td>
                    <td>Seletion</td>
                    <td>Manager</td>
                    <td>2010/03/17</td>
                    <td>Thaina</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        018</td>
                    <td>Michael </td>
                    <td>Silva</td>
                    <td>SNA</td>
                    <td>Teacher</td>
                    <td>2012/11/27</td>
                    <td>Vothy</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        019</td>
                    <td>Tatyana </td>
                    <td>Regional</td>
                    <td>Seletion</td>
                    <td>Manager</td>
                    <td>2010/03/17</td>
                    <td>Thaina</td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-trash-alt text-danger"></i>
                        <a href="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"><i
                                class=" fas fa-pencil-alt text-info"></i></a>
                        020</td>
                    <td>Michael </td>
                    <td>Silva</td>
                    <td>SNA</td>
                    <td>Teacher</td>
                    <td>2012/11/27</td>
                    <td>Vothy</td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Create News</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Employee Manager</h5>

                    </div>
                    <div class="container mt-4">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <label class="col-4" for="firstname">ID</label>
                                <p class="col-4">001</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">First Name</label>
                                <input class="col-7" type="text" name="firstname" class="form-control"
                                    placeholder="First Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="lastname">Last Name</label>
                                <input class="col-7" type="text" name="lastname" class="form-control"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="department">Department</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>WEB Trainer</option>
                                        <option value="1">ERO Team</option>
                                        <option value="2">HR</option>
                                        <option value="3">SNA Triner</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="firstname">Position</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>Englist Teacher</option>
                                        <option value="1">Professional</option>
                                        <option value="2">WEB Teacher</option>
                                        <option value="3">SNA Teacher</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="date">Start Date</label>
                                <input class="col-7" type="date" name="start-date" class="form-control"
                                    placeholder="start-date" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-4" for="manager">Manager</label>
                                <div class="col-8" class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>Banjimin</option>
                                        <option value="1">Sareoum</option>
                                        <option value="2">Thalai</option>
                                        <option value="3">Vothy</option>
                                    </select>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                        <a href="#"><button class="btn btn-info">OK</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alert Edit -->
    <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Employee Manager </h5>
                </div>
                <div class="container mt-4">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <label class="col-4" for="firstname">ID</label>
                            <p class="col-4">001</p>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="firstname">First Name</label>
                            <input class="col-7" type="text" name="firstname" class="form-control"
                                placeholder="First Name" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="lastname">Last Name</label>
                            <input class="col-7" type="text" name="lastname" class="form-control"
                                placeholder="Last Name" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="department">Department</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>WEB Trainer</option>
                                    <option value="1">ERO Team</option>
                                    <option value="2">HR</option>
                                    <option value="3">SNA Triner</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="firstname">Position</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Englist Teacher</option>
                                    <option value="1">Professional</option>
                                    <option value="2">WEB Teacher</option>
                                    <option value="3">SNA Teacher</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="date">Start Date</label>
                            <input class="col-7" type="date" name="start-date" class="form-control"
                                placeholder="start-date" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-4" for="manager">Manager</label>
                            <div class="col-8" class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Banjimin</option>
                                    <option value="1">Sareoum</option>
                                    <option value="2">Thalai</option>
                                    <option value="3">Vothy</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                    <a href="index.html"><button class="btn btn-info">OK</button></a>
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