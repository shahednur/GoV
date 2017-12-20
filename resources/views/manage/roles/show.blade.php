@extends('layouts.manage')

@section('content')
<div class="flex-container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
			<h5>{{$role->description}}</h5>
		</div>
		<div class="column">
			<a href="{{route('role.edit',$role->id)}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-user-plus"></i></span>&nbsp;&nbsp;&nbsp;Edit User Role</a>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="columns m-l-20 m-r-50">
		<div class="column">
	       <div class="box">
	       	<div class="media">
	       		<div class="media-content">
	       			<div class="content">
	       				<h2 class="title">Permissions:</h2>
	       				<ul>
	       					@foreach($role->permissions as $r)
	       					<li>{{$r->display_name}}<em class="m-l-15">{{$r->description}}</em></li>
	       					@endforeach
	       				</ul>
	       			</div>
	       		</div>
	       	</div>
	       </div>
		</div>
	</div>
</div>
@endsection