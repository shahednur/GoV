@extends('layouts.manage')

@section('content')
<div class="flex-container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Edit {{$role->display_name}}</h1>
			<h5>{{$role->description}}</h5>
		</div>
		<div class="column">
			<a href="{{route('role.index')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-arrow-left"></i></span>&nbsp;&nbsp;&nbsp;Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('role.update',$role->id)}}" method="POST">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<div class="columns m-l-20 m-r-50">
			<div class="column">
		       <div class="box">
		       	<article class="media">
		       		<div class="media-content">
		       			<div class="content">
		       				<h2 class="title">Role Details:</h2>
		       				<p class="control">
		       					<label for="display_name" class="label">Name (Human Readable)</label>
		       					<input type="text" class="input" value="{{$role->display_name}}" name="display_name" id="display_name">
		       				</p>
		       				<p class="control">
		       					<label for="name" class="label">Slug (Can not be edited)</label>
		       					<input type="text" class="input" value="{{$role->name}}" name="name" id="name" disabled>
		       				</p>
		       				<p class="control">
		       					<label for="description" class="label">Description</label>
		       					<input type="text" class="input" value="{{$role->description}}" name="description" id="description">
		       				</p>
		       			</div>
		       		</div>
		       	</article>
		       </div>
			</div>
		</div>

		<div class="columns m-l-20 m-r-50">
			<div class="column">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h2 class="title">Pemissions:</h2>
								<b-checkbox-group v-model="permissionSelected">
									@foreach($permissions as $permission)
                                       <div class="field">
                                       	<b-checkbox custome-value="{{$permission->name}}">
                                       		{{$permission->display_name}} &nbsp; <em>({{$permission->description}})</em>
                                       	</b-checkbox>
                                       </div>
									@endforeach
								</b-checkbox-group>
							</div>
						</div>
					</article>
				</div>
				<button type="submit" class="button is-primary">Save</button>
			</div>
		</div>
   </form>
</div>
@endsection

@section('scripts')
  <script>
  	var app = new Vue({
  		el:'#app',
  		data:{
  		  permissionSelected:[]
  	    }
  	});
  </script>
@endsection