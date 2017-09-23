@extends('backEnd.admin.master')
@section('mainContent')

<h3>Add Category</h3>
<br>
    <div class="row">
        <div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading">Add Category 
<span class="text-center text-success">
	{{Session::get('message')}}
</span>
</div>
<div class="panel-body">
{!! Form::open(['url' => 'category/save','method'=>'post','class'=>'form-horizontal']) !!}
<div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Category Name
</label>

    <div class="col-md-6">
        <input id="cdis" type="text" class="form-control" name="cname">

        @if ($errors->has('cname'))
            <span class="help-block">
                <strong>{{ $errors->first('cname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cdis') ? ' has-error' : '' }}">
    <label for="cdis" class="col-md-4 control-label">Category Discription</label>

    <div class="col-md-6">
        <textarea class="form-control" name="cdis">
        	
        </textarea>

        @if ($errors->has('cdis'))
            <span class="help-block">
                <strong>{{ $errors->first('cdis') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('published') ? ' has-error' : '' }}">
    <label for="Published" class="col-md-4 control-label">Published</label>

    <div class="col-md-6">
        
<select class="form-control" name="published">
	<option value="">
	Select Published Status
	</option>
	<option value="1">Published</option>
	<option value="0">Un Published</option>
</select>

        @if ($errors->has('published'))
            <span class="help-block">
                <strong>{{ $errors->first('published') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-plus"></i>
            Add Category
        </button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
        </div>
    </div>

@endsection