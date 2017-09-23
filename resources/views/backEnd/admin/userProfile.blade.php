@extends('backEnd.admin.master')
@section('mainContent')
<br>
<hr>
<h3 class="text-center text-success">View Your Profile</h3>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<ul class="list-group">
<li class="list-group-item list-group-item-success">User Id</li>
		<li class="list-group-item list-group-item-primary"> <i class="fa fa-user"></i> User Name </li>
		<li class="list-group-item list-group-item-info"><i class="fa fa-envelope"></i> User Email </li>
			
			</ul>
		</div>
		<div class="col-md-4">
			<ul class="list-group">
			<li class="list-group-item">{{ Auth::user()->id }} </li>
			<li class="list-group-item">{{ Auth::user()->name }} </li>
			<li class="list-group-item">{{ Auth::user()->email }} </li>
			</ul>
		</div>
	</div>
</div>
@endsection