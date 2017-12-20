@extends('layouts.manage')

@section('content')
<div class="flex-container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Manage Roles</h1>
		</div>
		<div class="column">
			<a href="{{route('role.create')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-user-plus"></i></span>&nbsp;&nbsp;&nbsp;Add New User Role</a>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="columns m-l-20 m-r-50 is-multiline">
		@if(count($roles)>0)
		@foreach($roles as $role)
		<div class="column is-one-quarter">
	       <div class="box">
	       	<div class="media">
	       		<div class="media-content">
	       			<div class="content">
	       				<h3 class="title">{{$role->display_name}}</h3>
	       				<h4 class="subtitle">{{$role->name}}</h4>
	       				<p>{{$role->description}}</p>
	       			</div>
	       			<div class="columns is-mobile">
	       				<div class="column is-one-half">
	       					<a href="{{route('role.show',$role->id)}}" class="button is-primary is-outlined is-fullwidth">Details</a>
	       				</div>
	       				<div class="column">
	       					<div class="level-item"><a href="{{route('role.edit',$role->id)}}" class="button  is-outlined is-fullwidth">Edit</a></div>
	       				</div>
	       			</div>
	       		</div>
	       	</div>
	       </div>
		</div>
		@endforeach
		@endif
	</div>
</div>
@endsection