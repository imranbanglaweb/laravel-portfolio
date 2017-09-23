@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3><i class="fa fa-list"></i> Products List</h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
<i class="fa fa-list"></i> Category List
<span class="text-right text-success btn-block">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-hover">
                        <tr>
                            <td>Product Name</td>
                            <td>Category Name</td>
                            <td>Products Discription</td>
                            <td>Product Price</td>
                            <td>Product Quantity</td>
                            <td>Image</td>
                            <td width="45%">Action</td>
                        </tr>
                @foreach($products as $product)
                        <tr>
                <td>{{$product->productsname}}</td>
                <td>{{$product->cname}}</td>
                <td>{{ Text::shorten($product->productsldis ,15)}}</td>
                <td>{{$product->productsprice}}</td>
                <td>{{$product->productsQuantity}}</td>
                <td>
                <img src="{{ asset($product->productsimage)}}" height="35px" width="50px"> 
                </td>
                    <td>
<a style="text-decoration: none" href="{{ url('/Product/edit/'.$product->id)}} " class="btn-sm btn-primary">
<i class="fa fa-edit"></i> Edit 
</a>  || 
<a style="text-decoration: none" href="{{ url('/Products/delete/'.$product->id)}} " class="btn-sm btn-danger" onclick="return confirm('Are You Sure to Deleted');">
<i class="fa fa-remove"></i> Delete
</a>
                            </td>
                        </tr>
                        
                @endforeach
                            
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection