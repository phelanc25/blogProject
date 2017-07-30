<!-- importing main view -->
@extends('main')

<!-- setting page title -->
@section('title','| Create Post')

<!-- importing parsley css -->
@section('stylesheets')
  <link rel="stylesheet" href="http://parsleyjs.org/src/parsley.css">
@endsection

<!-- displaying main content of page -->
@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{$post->title}}</h1>
			<hr>
			<p class="lead">
				{{$post->body}}
			</p>
		</div>

		<!-- creating container in sidebar to store action buttons (edit/delete)-->
		<div class="col-md-4">
			<div class="well">
				<!-- showing the date the blog post was created -->
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{date('M j, Y g:i A',strtotime($post->created_at))}}</p>
				</dl>
				<!-- showing the date blog post was last updated -->
				<dl class="dl-horizontal">
					<label>Updated At:</label>
					<p>{{date('M j, Y g:i A',strtotime($post->updated_at))}}</p>
				</dl>	
				<hr>
				<!-- button to edit post -->
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ route('posts.edit',$post->id) }}" class="btn btn-info btn-md btn-block">Edit Post</a>
					</div>
				

					<!-- making button to delete post -->
					<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
						<div class="col-sm-6">
							{{method_field('DELETE')}}
							<input type="submit" value="Delete" class="btn btn-danger btn-md btn-block">
							<input type="hidden" name="_token" value="{{ Session::token() }}">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection <!-- end of main content -->

<!-- importing page specific js for validating form -->
@section('scripts')
    <script type="text/javascript" src="http://parsleyjs.org/dist/parsley.min.js"></script>﻿
@endsection