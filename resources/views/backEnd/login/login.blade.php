@extends('backEnd.login.master')
@include('backEnd.login.header')
@section('mainContent')
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
           <h3 class="panel-title">Please Sign In</h3>
        </div>
<div class="panel-body">
<!-- <form class="form-horizontal" method="POST" action="{{ route('login') }}">
 -->
{!! Form::open(['url'=>'login','method'=>'post']) !!}
    <fieldset>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {{Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Enter Your Email'])}}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {{ Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'Enter Your Password'])}}

    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    </div>
    <div class="checkbox">
    <label>
    {{ Form::checkbox('name','Remember Me')}}
    Remember Me
    </label>
    </div>
    <!-- Change this to a button or input when using this as a form -->
        {{Form::submit('Login',['class'=>'btn btn-lg btn-success btn-block btn-primary'])}}
    
       </fieldset>
{!! Form::close() !!}
</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('backEnd.login.footer')