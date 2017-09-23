@extends('backEnd.admin.master')

@section('mainContent')
<br>
<hr>
<h3>Add Portfolio <span class="text-center text-success">
    {{Session::get('message')}}
</span></h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Add Portfolio</div>
                <div class="panel-body">
{!! Form::open(['url' => 'Portfolio/create','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
<label for="title" class="col-md-4 control-label">
Title</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

 @if ($errors->has('title'))
<span class="help-block">
<strong>{{ $errors->first('title') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('discription') ? ' has-error' : '' }}">
    <label for="discription" class="col-md-4 control-label"> Discription</label>

    <div class="col-md-6">
        <input id="discription" type="text" class="form-control" name="discription" value="{{ old('discription') }}" >

        @if ($errors->has('discription'))
            <span class="help-block">
                <strong>{{ $errors->first('discription') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('discription') ? ' has-error' : '' }}">
    <label for="discription" class="col-md-4 control-label"> Link</label>

    <div class="col-md-6">
        <input id="link" type="text" class="form-control" name="link" value="{{ old('link') }}" placeholder="Enter Your Link">

        @if ($errors->has('discription'))
            <span class="help-block">
                <strong>{{ $errors->first('link') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('planguage') ? ' has-error' : '' }}">
    <label for="planguage" class="col-md-4 control-label"> Language</label>

    <div class="col-md-6">
        <select id="planguage" name="planguage" class="form-control">
            <option value="">Select Your Language</option>
            <option value="0">Raw Php</option>
            <option value="1">Laravel</option>
            <option value="2">Codeigniter</option>
            <option value="3">Javascript</option>
            <option value="4">Wordpress</option>
            <option value="5">Html & Css3</option>
        </select>
        @if ($errors->has('planguage'))
            <span class="help-block">
                <strong>{{ $errors->first('planguage') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <label for="image" class="col-md-4 control-label">Upload</label>

    <div class="col-md-6">
        <input id="image" type="file" name="image" >

        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Portfolio
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