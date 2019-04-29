@extends('layout.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>     
<br><br>
<div class="container ">
        <h2>Employee Personal Information</h2>
        <br>
        <div class="row-fluid user-infos">
            <div class="span10 offset1">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="row-fluid">
                            <div class="span6">
                                <table class="table table-condensed table-responsive table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <td>First Name:</td>
                                        <td>Lida</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Departerment</td>
                                        <td>External Relation Team</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>ERO Manager</td>
                                    </tr>
                                    <tr>
                                         <td>Start Date</td>
                                        <td>15/05/2019</td>
                                    </tr>
                                     <tr>
                                        <td>Manager</td>
                                        <td>Jack Tomas</td>
                                     </tr>
                                     <tr>
                                        <td>Status</td>
                                        <td>Active</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i id="material" class="material-icons flaot-left">add</i>Create Leave Type
                    </button>
                        <span class="pull-right">
                            <button class="btn btn-warning" type="button"><i class="material-icons flaot-left">do_not_disturb</i>Deactivate Employee</button>
                            <button class="btn btn-danger" type="button"><i class="material-icons flaot-left">chevron_left</i>Back To List</button>
                        </span>
             
                </div>
            </div>
        </div>
    </div>

</body>     
</html>
@endsection   