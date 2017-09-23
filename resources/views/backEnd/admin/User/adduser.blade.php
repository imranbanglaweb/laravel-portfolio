@extends('backEnd.admin.master')

@section('mainContent')
<br>
<hr>
<h3>Add User <span class="text-center text-success">
    {{Session::get('message')}}
</span></h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
                <div class="panel-body">
{!! Form::open(['url' => 'user/save','method'=>'post','class'=>'form-horizontal']) !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">
Name</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

 @if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-md-4 control-label">Address</label>

    <div class="col-md-6">
        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" >

        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
    <label for="cell" class="col-md-4 control-label">Cell </label>

    <div class="col-md-6">
        <input id="cell" type="cell" class="form-control" name="cell" value="{{ old('cell') }}" >

        @if ($errors->has('cell'))
            <span class="help-block">
                <strong>{{ $errors->first('cell') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="cpassword" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="cpassword" type="password" class="form-control" name="cpassword" >
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add User
        </button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection