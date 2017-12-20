@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">View Post</h1>
		</div>
		<div class="column">
			<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-user-plus"></i></span>&nbsp;&nbsp;&nbsp;Add New Post</a>
		</div>
	</div>
	<hr>
	<div class="columns m-l-20">
		<div class="column m-r-50">
			<div class="card">
				<div class="card-content">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection