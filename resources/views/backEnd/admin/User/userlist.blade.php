@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3><i class="fa fa-list"></i> User List</h3>
<br>
<button class="pull-right btn btn-success">
<a href="{{ url('/user/add')}}" style="color: white;text-decoration: none;">
<i class="fa fa-plus"></i> Add User</a></button>
<br>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
<i class="fa fa-list"></i> Users List
<span class="text-right text-success btn-block">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-hover">
                        <tr>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>User Address</td>
                            <td>User Cell</td>
                            <td width="25%">Action</td>
                        </tr>
                @foreach($users as $user)
                        <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->cell}}</td>
                    <td>
<a style="text-decoration: none" href="{{ url('/user/edit/'.$user->id)}} " class="btn-sm btn-primary">
<i class="fa fa-edit"></i> Edit 
</a>
&nbsp;
<a style="text-decoration: none" href="{{ url('/user/del/'.$user->id)}} " class="btn-sm btn-danger" onclick="return confirm('Are You Sure to Deleted');">
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