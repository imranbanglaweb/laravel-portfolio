@extends('backEnd.admin.master')

@section('mainContent')
<br>
<hr>
<h3>Add Page <span class="text-center text-success">
    {{Session::get('message')}}
</span></h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
                <div class="panel-body">
{!! Form::open(['url' => 'page/save','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
<div class="form-group{{ $errors->has('ptitle') ? ' has-error' : '' }}">
<label for="ptitle" class="col-md-4 control-label">
Page Title</label>

<div class="col-md-6">
<input id="ptitle" type="text" class="form-control" name="ptitle" value="{{ old('ptitle') }}" autofocus placeholder="Enter Your Page Title">

 @if ($errors->has('ptitle'))
<span class="help-block">
<strong>{{ $errors->first('ptitle') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('pcontent') ? ' has-error' : '' }}">
<label for="pcontent" class="col-md-4 control-label">
Page Content</label>

<div class="col-md-6">
<input id="pcontent" type="text" class="form-control" name="pcontent" value="{{ old('pcontent') }}" autofocus placeholder="Enter Your Page Content">

 @if ($errors->has('pcontent'))
<span class="help-block">
<strong>{{ $errors->first('pcontent') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('pimage') ? ' has-error' : '' }}">
<label for="pimage" class="col-md-4 control-label">
Page Image</label>

<div class="col-md-6">
<input id="pimage" type="file" class="form-control" name="pimage"  autofocus>

 @if ($errors->has('pimage'))
<span class="help-block">
<strong>{{ $errors->first('pcontent') }}</strong>
</span>
@endif
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