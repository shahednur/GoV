@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Manage Permissions</h1>
		</div>
		<div class="column">
			<a href="{{route('permission.create')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-user-plus"></i></span>&nbsp;&nbsp;&nbsp;Add New User Permission</a>
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
							<th>Slug</th>
							<th>Description</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if(count($permissions)>0)
						 @foreach($permissions as $permission)
						<tr>
							<td>{{$permission->id}}</td>
							<td>{{$permission->name}}</td>
							<td>{{$permission->display_name}}</td>
							<td>{{$permission->description}}</td>
							<td>{{$permission->updated_at->toFormattedDateString()}}</td>
							<td>
								<a href="{{route('permission.edit',$permission->id)}}" class="button is-warning is-small">Edit</a>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection