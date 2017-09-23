@extends('backEnd.admin.master')
@section('mainContent')


    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Update Page</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('/page/update') }}" enctype="multipart/form-data">
               {{ csrf_field() }}

<div class="form-group{{ $errors->has('ptitle') ? ' has-error' : '' }}">
<label for="ptitle" class="col-md-4 control-label">Page Title</label>

                <div class="col-md-8">
            <input type="hidden" name="uId" value="{{$pageById->id }}">
                    <input id="ptitle" type="text" class="form-control" name="ptitle" value="{{ $pageById->ptitle }}" autofocus>
                        @if ($errors->has('ptitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ptitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('pcontent') ? ' has-error' : '' }}">
<label for="pcontent" class="col-md-4 control-label">Page Content</label>

                <div class="col-md-8">
                    <textarea id="pcontent" class="form-control" name="pcontent">
                        {{ $pageById->pcontent}}
                    </textarea>
            @if ($errors->has('pcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('pcontent') }}</strong>
                        </span>
             @endif
                </div>
</div>
<div class="form-group{{ $errors->has('pcontent') ? ' has-error' : '' }}">
<label for="pcontent" class="col-md-4 control-label">Page Image</label>

                <div class="col-md-8">
        <img img src="{{ asset($pageById->pimage)}}" height="35px" width="50px">
        <input type="file" name="pimage" class="form-control">
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Updated
                </button>
            </div>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection