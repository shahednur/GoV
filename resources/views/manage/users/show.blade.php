@extends('layouts.manage')

@section('content')
<div class="flex-container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">View User's Details</h1>
		</div>
		<div class="column m-r-50">
			<a href="{{route('users.edit',$users->id)}}" class="button is-primary is-pulled-right"><span class="icon is-small is-left"><i class="fa fa-pencil-square-o"></i></span>&nbsp;&nbsp;Edit</a>
		</div>
	</div>
     <hr class="m-t-3">
    <div class="columns m-l-20">
    	<div class="column m-r-50">
    		<div class="card">
    			<div class="card-content">
    				<table class="table is-fullwidth">
					  <tbody>
					  	<tr>
					  		<td>
					  			<label for="name" class="label">Name</label>
					  		</td>
					  		<td>
					  			<pre>{{$users->name}}</pre>
					  		</td>
					  	</tr>
					  	<tr>
					  		<td>
					  			<label for="email" class="label">Email</label>
					  		</td>
					  		<td>
					  			<pre>{{$users->email}}</pre>
					  		</td>
					  	</tr>
					  	<tr>
					  		<td>
					  			<label for="password" class="label">Password</label>
					  		</td>
					  		<td>
					  			<pre>{{$users->password}}</pre>
					  		</td>
					  	</tr>
		              </tbody>
		            </table>
    			</div>
    		</div>
    		<!-- <div class="field">
    			<label for="name" class="label">Name</label>
    			<pre>{{$users->name}}</pre>
    		</div>
    		<div class="field">
    			<label for="email" class="label">Email</label>
    			<pre>{{$users->email}}</pre>
    		</div>
    		<div class="field">
    			<label for="password" class="label">Password</label>
    			<pre>{{$users->password}}</pre>
    		</div> -->
    	</div>
    </div>
</div>

@endsection
