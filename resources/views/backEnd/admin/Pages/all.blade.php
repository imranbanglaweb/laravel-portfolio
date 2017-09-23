@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3><i class="fa fa-list"></i> Pages List</h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
<i class="fa fa-list"></i> Portfolio List
<span class="text-right text-success btn-block">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-hover">
                        <tr class="text-success">
                            <th width="10%">SL No</th>
                            <th width="20%">Ttitle</th>
                            <th width="30%"> Discription</th>
                            <th width="5%">Image</th>
                            <th width="30%">Action</th>
                        </tr>
                <?php $i = 0 ?>
                @foreach($pages as $page)
                <?php $i++ ?>
                        <tr>
                <td>{{$i}}</td>
                <td>{{$page->ptitle}}</td>
               
                <td>
                
               
                {{ Text::shorten($page->pcontent, 15) }}
                </td>
                <td>
                <img src="{{ asset($page->pimage)}}" height="35px" width="50px"> 
                </td>
                    <td>
<a style="text-decoration: none" href="{{ url('/page/edit/'.$page->id)}} " class="btn-sm btn-primary">
<i class="fa fa-edit"></i> Edit 
</a>  &nbsp;|| 
<a style="text-decoration: none" href="{{ url('/page/delete/'.$page->id)}} " class="btn-sm btn-danger" onclick="return confirm('Are You Sure to Deleted');">
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