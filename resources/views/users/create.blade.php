@extends('layout.app')

@section('content')

@include('validation-errors')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn bg-primary" href="{{url('users')}}">@lang('Back to list')</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary">@lang('Create a new user')</div>

                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">@lang('Name')</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div> 

                        <div class="form-group">
                            <label for="email">@lang('Email')</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="txtPassword">@lang('Password')</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
 
                        <div class="form-group">
                            <label for="roles[]">Roles</label>
                            <select class="form-control" id="roles" name="roles[]" multiple size="5">

                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if (!empty(old('roles'))) @if(in_array($role->id, old('roles'))) selected @endif @endif>{!! $role->name !!}</option>
                                @endforeach
 
                            </select>
                        </div>

                        <input type="submit" class="btn bg-pramary" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>

@endsection

@push('scripts')
<script type="text/javascript">
//On document ready, 
$(function() {

});
</script>
@endpush
