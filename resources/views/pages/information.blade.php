@extends('layout.app')
@section('content')
{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
</head>
<body>
 
    <div class="container mt-4 cont">
        <div>
            <a href=""><i class="far fa-paper-plane"></i></a>
        </div>
     <form action="">
                <label for="">From:</label>
                <input type="text" name="" class="inputs" placeholder="E-MSimple@gmail.com"><br>
                <label for="">To:</label>
                <input type="text" name="" class="inputs" placeholder="jack.thomas@gmail.com"><br>
                <label for="">Subject:</label>
                <input type="text" name="" class="inputs" placeholder="New leave request assigned to you in E-MSimple"><br>
                <label for="">Subject:</label>
                <input type="text" name="" class="inputs" placeholder="New leave request assigned to you in E-MSimple">
        </form>
        <hr>
        <div>
            <p>Hello jack thomas,</p>
              <p>  Employee Lina Jacks ha submitted the following leave request for approval:</p>
              <div class="row row1 text-center">
                  <div class="col-3">
                      <p>Start date</p>
                      <p>End date</p>
                      <p>Duration</p>
                      <p>Leave type</p>
                  </div>
                  <div class="col-3">
                      <p>15/05/2019</p>
                      <p>17/05/2019</p>
                      <p>3 days</p>
                      <p>Vacation</p>
                  </div>
                  <div class="col-3">
                      <p>Comment</p>
                      <p>Employee</p>
                      <br>
                      <p>Status</p>
                  </div>
                  <div class="col-3">
                       <p>OFF</p>
                        <p>Lina Jacks</p>
                        <br>
                        <p>Requested</p>
                  </div>
              </div>
                <p>Can you please   <a href=""> ACCEP</a> or <a href="">REJECT</a>this leave request. You can also access to  <a href="">leave request details </a>to review this request</p>   
                <p>Thanks & regards,</p>
                <p>HR officer</p>
        </div>
    </div>
</body>
</html>
@endsection