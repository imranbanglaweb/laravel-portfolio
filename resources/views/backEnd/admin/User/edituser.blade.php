@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3>Edit Category</h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading">Edit User 
<span class="text-center text-success">
    <!-- {{Session::get('message')}} -->
</span>
</div>
<div class="panel-body">
{!! Form::open(['url' => 'user/update','method'=>'post','class'=>'form-horizontal','name'=>'editCform']) !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">User Name
</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $userById->name }}">
        <input type="hidden" name="id" value="{{ $userById->id }}">
    </div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="email" class="col-md-4 control-label">User Email
</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ $userById->email }}">
    </div>
</div>
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
<label for="address" class="col-md-4 control-label">User Address
</label>

    <div class="col-md-6">
<input type="text" class="form-control"   name="address" value="{{ $userById->address }}">
    </div>
</div>
<div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
<label for="cell" class="col-md-4 control-label">User Cell
</label>

    <div class="col-md-6">
        <input id="cell" type="text" class="form-control" name="cell" value="{{ $userById->cell }}">
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="password" class="col-md-4 control-label">User Password
</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" value="{{ $userById->password }}">
    </div>
</div>
<div class="form-group{{ $errors->has('cpassword') ? ' has-error' : '' }}">
<label for="cpassword" class="col-md-4 control-label">Confirm Password
</label>

    <div class="col-md-6">
        <input id="cpassword" type="password" class="form-control" name="cpassword" value="{{ $userById->cpassword }}">
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">
        <i class="fa fa-plus"></i>
            Update User
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