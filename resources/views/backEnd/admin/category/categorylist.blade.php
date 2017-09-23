@extends('backEnd.admin.master')
@section('mainContent')

<h3><i class="fa fa-list"></i> Category List</h3>

    <div class="row">
        <div class="col-md-10">
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
                            <td>Category Name</td>
                            <td>Category Dis</td>
                            <td>Category Published</td>
                            <td>Action</td>
                        </tr>
                @foreach($categories as $category)
                        <tr>
                    <td>{{$category->cname}}</td>
                    <td>{{Text::shorten($category->cdis,10)}}</td>
                    <td>{{$category->published == 1 ?'Published ':'Unpublished'}}</td>
                    <td>
<a style="text-decoration: none" href="{{ url('/category/edit/'.$category->id)}} " class="btn-sm btn-primary">
<i class="fa fa-edit"></i> Edit
</a>
                    </td>
                            <td>
<a style="text-decoration: none" href="{{ url('/category/delete/'.$category->id)}} " class="btn-sm btn-danger" onclick="return confirm('Are You Sure to Deleted');">
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

@endsection