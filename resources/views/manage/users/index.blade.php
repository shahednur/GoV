@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column">
			<a href="{{route('users.create')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-user-plus"></i></span>&nbsp;&nbsp;&nbsp;Add New User</a>
		</div>
	</div>
	<hr>
	<div class="columns m-l-20">
		<div class="column m-r-50">
			<div class="card">
				<div class="card-content">
					<table class="table table is-fullwidth is-hoverable">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if(count($users)>0)
						 @foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->updated_at->toFormattedDateString()}}</td>
							<td>
								<a href="{{route('users.edit',$user->id)}}" class="button is-warning is-small">Edit</a>
								<a href="{{route('users.destroy',$user->id)}}" class="button is-danger is-small">Delete</a>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
				</div>
				{{$users->links()}}
			</div>
		</div>
	</div>
</div>
@endsection