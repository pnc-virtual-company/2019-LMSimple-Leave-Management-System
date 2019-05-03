{{-- @extends('layout.app')

@section('content') --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@include('validation-errors')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning">@lang('Create a new user')</div>

                <div class="card-body bg-primary">

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

                        <input type="submit" class="btn btn-warning" value="Save" />
                    </form>
                </div> 
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

{{-- @endsection --}}

@push('scripts')
<script type="text/javascript">
//On document ready, 
$(function() {

});
</script>
@endpush
