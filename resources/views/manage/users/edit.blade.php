@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column">
			<a href="{{route('users.show',$users->id)}}" class="button is-primary is-pulled-right m-r-50">Forward&nbsp;&nbsp;<span class="icon is-small is-left"><i class="fa fa-arrow-right"></i></span></a>
			<a href="{{route('users.index',$users->id)}}" class="button is-primary is-pulled-right m-r-10"><span class="icon is-small is-left"><i class="fa fa-arrow-left"></i></span>&nbsp;&nbsp;Back</a>
		</div>
	</div>
	<hr>
	<div class="columns m-l-20">
		<div class="column m-r-50">
			<div class="card">
				<div class="card-content">
					<form action="{{route('users.update',$users->id)}}" method="POST">
						{{method_field('PUT')}}
						{{ csrf_field() }}
						<div class="field">
							<label for="name" class="label">Name</label>
							<p class="control">
								<input type="text" name="name" id="name" class="input" value="{{$users->name}}">
							</p>
						</div>
						<div class="field">
							<label for="email" class="label">Email</label>
							<p class="control">
								<input type="email" name="email" id="email" class="input" value="{{$users->email}}">
							</p>
						</div>
						<div class="field">
							<label for="password" class="label">Password</label>
							<b-radio-group v-model="password_options">
                               <div class="field">
                               	 <b-radio value="keep">Do Not Change Password</b-radio>
                               </div>
                               <div class="field">
                               	<b-radio value="auto">Auto-Generate New Password</b-radio>
                               </div>
                               <div class="field">
                               	<b-radio value="manual"> Manually Set New Password</b-radio>
                               	<p class="control">
								<input type="password" name="password" id="password" class="input" value="{{$users->password}}" v-if="password_options == 'manual'">
								
							</p>
                               </div>
							</b-radio-group>
							
						</div>
						<div class="field">
							<p class="control">
								<button type="submit" class="button is-info">Edit User</button>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	var app = new Vue({
		el:'#app',
		data:{
			password_options:'keep'
		}
	});
</script>
@endsection
