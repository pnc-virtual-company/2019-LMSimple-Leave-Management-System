<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Sign in Form</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
        <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-row">
                  <div class="col-6">
                        <h1 class="text-center">Login</h1> 
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif 
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login </button>
                        </div>         
                  </div>
                  <div class="col-6">
                      <img src="{{asset('images/pic.png')}}" alt="">
                      <h2>Leave Management System</h2>
                  </div>
                </div>
              </form>
            </div>
</div> 
</body>
</html>                                		                            