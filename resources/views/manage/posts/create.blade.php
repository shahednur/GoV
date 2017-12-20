@extends('layouts.manage')

@section('content')
<div class="container m-t-10" style="background:whitesmoke">
	<div class="columns m-l-20">
		<div class="column">
			<h1 class="title">Post Content Manage</h1>
		</div>
		<div class="column">
			<a href="{{route('posts.index')}}" class="button is-primary is-pulled-right m-r-50"><span class="icon is-left"><i class="fa fa-arrow-left"></i></span>&nbsp;&nbsp;&nbsp;Back To Post</a>
		</div>
	</div>
	<hr>
	<form action="{{route('posts.store')}}" method="POST">
		{{csrf_field()}}
	<div class="columns m-l-20 m-r-30">
		<div class="column is-three-quarters">
			<b-field>
               <b-input placeholder="Post Title" size="is-large" v-model="title">

               </b-input>
            </b-field>
            <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title">
            </slug-widget>
        <b-field class="m-t-30">
            <b-input type="textarea"
                placeholder="Compose your post here...." rows="15">
            </b-input>
        </b-field>
		</div>
		<div class="column is-one-quarter">
			<div class="card card-widget">
				<div class="card-content">
					<div class="author-widget-area">
						<img src="https://placehold.it/50x50" alt="" class="is-pulled-left">
						<h4>By: Shahed Nur</h4>
					</div>
					<div class="post-status-widget-area">
						<span class="icon is-left m-r-160"><i class="fa fa-align-justify" aria-hidden="true"></i></span>
						<h4><b>Draft</b>&nbsp;&nbsp;saved</h4>
						<p class="m-l-50">A Few Minutes Ago (saved)</p>
					</div>
					<div class="publish-buttons-widget-area">
						<div class="secodary-action-button m-l-5">
							<button class="button is-outlined is-success is-fullwidth">Save Draft</button>
						</div>
						<div class="primary-action-button is-pulled-right">
							<button class="button is-primary is-fullwidth">Publish</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
@endsection