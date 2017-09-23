@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3>Add Products</h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading">Add Category 
<span class="text-center text-success">
	{{Session::get('message')}}
</span>
</div>
<div class="panel-body">
{!! Form::open(['url' => 'Products/save','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
<div class="form-group{{ $errors->has('productsname') ? ' has-error' : '' }}">
<label for="productsname" class="col-md-4 control-label">Products Name
</label>

    <div class="col-md-6">
        <input id="productsname" type="text" class="form-control" name="productsname">

        @if ($errors->has('productsname'))
            <span class="help-block">
                <strong>{{ $errors->first('productsname') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('published') ? ' has-error' : '' }}">
    <label for="Published" class="col-md-4 control-label">Category Name
</label>

    <div class="col-md-6">
        
<select class="form-control" name="categoryId">
    <option value="">
    Select Category Name
    </option>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">
    {{ $category->cname }}</option>
    @endforeach
</select>

        @if ($errors->has('categoryId'))
            <span class="help-block">
                <strong>{{ $errors->first('categoryId') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('menufactureId') ? ' has-error' : '' }}">
    <label for="menufactureId" class="col-md-4 control-label">Menufacture Name
</label>

    <div class="col-md-6">
        
<select class="form-control" name="menufactureId">
	<option value="">
	Select Menufacture Name
	</option>
	<option value="1">Published</option>
	<option value="0">Un Published</option>
</select>

        @if ($errors->has('menufactureId'))
            <span class="help-block">
                <strong>{{ $errors->first('menufactureId') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('productsldis') ? ' has-error' : '' }}">
<label for="productsldis" class="col-md-4 control-label">Products Long Discription
</label>

    <div class="col-md-6">
        <input id="productsldis" type="text" class="form-control" name="productsldis">

        @if ($errors->has('productsldis'))
            <span class="help-block">
                <strong>{{ $errors->first('productsldis') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('productssdis') ? ' has-error' : '' }}">
    <label for="productssdis" class="col-md-4 control-label">Products Short Discription</label>

    <div class="col-md-6">
        <textarea class="form-control" name="productssdis">
            
        </textarea>

        @if ($errors->has('productssdis'))
            <span class="help-block">
                <strong>{{ $errors->first('productssdis') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('productsprice') ? ' has-error' : '' }}">
<label for="productsprice" class="col-md-4 control-label">Products Price
</label>

    <div class="col-md-6">
        <input id="productsprice" type="text" class="form-control" name="productsprice">

        @if ($errors->has('productsprice'))
            <span class="help-block">
                <strong>{{ $errors->first('productsprice') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('productsQuantity') ? ' has-error' : '' }}">
<label for="productsQuantity" class="col-md-4 control-label">Products Quantity
</label>

    <div class="col-md-6">
    <input id="productsQuantity" type="text" class="form-control" name="productsQuantity">

        @if ($errors->has('productsQuantity'))
            <span class="help-block">
                <strong>{{ $errors->first('productsQuantity') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('published') ? ' has-error' : '' }}">
    <label for="Published" class="col-md-4 control-label">Publication Status
</label>

    <div class="col-md-6">
        
<select class="form-control" name="publishedstatus">
    <option value="">
    Select Publication Status
    </option>
    <option value="1">Published</option>
    <option value="0">Un Published</option>
</select>

        @if ($errors->has('publishedstatus'))
            <span class="help-block">
                <strong>{{ $errors->first('publishedstatus') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('productsimage') ? ' has-error' : '' }}">
<label for="productsimage" class="col-md-4 control-label">Products Image
</label>

    <div class="col-md-6">
    <input id="productsimage" type="file" class="form-control" name="productsimage">
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-plus"></i>
            Add Products
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