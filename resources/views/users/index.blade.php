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
    <h1 class="text-center">List User</h1><br>
    <div class="container">
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                   <th>@lang('ID')</th>
                   <th>@lang('Name')</th>
                   <th>@lang('Email')</th>
                   <th>@lang('Roles')</th>
                </tr>
            </thead>

            <tbody> 
                  @foreach ($users as $user)
                        <tr data-id="{{ $user->id }}">
                            <td>
                                <a href="#"><i class="material-icons clickable text-danger" data-id="{{ $user->id }}" title="@lang('delete the user')">delete</i></a>
                                <a href="{{url('users')}}/{{ $user->id }}/edit" title="@lang('edit')"><i class="material-icons clickable text-success">create</i></a>
                                <a href="{{url('users')}}/{{ $user->id }}" title="@lang('view')"><i class="material-icons clickable text-info">visibility</i></a>
                                    <span>{{ $user->id }}</span>
                            </td>
                            <td> 
                                    <span>{!! $user->name !!}</span>
                            </td> 
                            <td> 
                                    <span>{!! $user->email !!}</span>
                            </td>
                            <td>
                                    <span>{{ $user->roles->pluck('name')->implode(', ') }}</span>
                            </td>
                        </tr>
                    @endforeach
             
            </tbody>
            <script>
    $(document).ready(function () {
        $('#table').DataTable({
            
        });
    });
</script>
        </table>
         
@endsection 


