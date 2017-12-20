@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column">
			<a href="{{route('users.index')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-small is-left"><i class="fa fa-arrow-left"></i></span>&nbsp;&nbsp;Back</a>
		</div>
	</div>
	<hr>
	<div class="columns m-l-20">
		<div class="column m-r-50">
			<div class="card">
				<div class="card-content">
					<form action="{{route('users.store')}}" method="POST">
						{{ csrf_field() }}
						<div class="field">
							<label for="name" class="label">Name</label>
							<p class="control">
								<input type="text" name="name" id="name" class="input">
							</p>
						</div>
						<div class="field">
							<label for="email" class="label">Email</label>
							<p class="control">
								<input type="email" name="email" id="email" class="input">
							</p>
						</div>
						<div class="field">
							<label for="password" class="label">Password</label>
							<p class="control">
								<input type="password" name="password" id="password" class="input" v-if="!auto_password">
								<b-checkbox name="auto_generate" class="m-t-30" v-model="auto_password">Auto Generate Password</b-checkbox>
							</p>
						</div>
						<div class="field">
							<p class="control">
								<button type="submit" class="button is-info">Save</button>
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
  	var app = new vue({
  		el:'#app',
  		data:{
  			auto_password:true
  		}
  	});
  </script>
@endsection