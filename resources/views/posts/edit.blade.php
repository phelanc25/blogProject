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
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit Post</h1>
			<hr>
			<!-- creating new post entry form -->
			<form method="POST" action="{{ route('posts.update',$post->id) }}" data-parsley-validate="">
				<!-- creating title field -->
				<div class="form-group">
					<label name="title">Title:</label>
					<!-- Passing title field of post into title textbox -->
					<input id="title" name="title" class="form-control" required="" maxlength="255" value="{{$post->title}}">
				</div>
				<!-- creating body field -->
				<div class="form-group">
					<label name="body">Post Body:</label>
					<!-- Passing body field of post into body text -->
					<textarea id="body" name="body" rows="10" class="form-control text-left" required="" maxlength="255">{{$post->body}}</textarea>
				</div>

				{{method_field('PUT')}}

				<!-- creating button that will POST the post -->
				<input type="submit" value="Save Changes" class="btn btn-success btn-lg btn-block">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				<br>
				<!-- creating button to cancel changes. will take back to index -->
				<a href="{{ route('posts.index') }}" class="btn btn-danger btn-lg btn-block">Cancel</a>
				
			</form>
		</div>
	</div>

@endsection <!-- end of main content -->

<!-- importing page specific js for validating form -->
@section('scripts')
    <script type="text/javascript" src="http://parsleyjs.org/dist/parsley.min.js"></script>﻿
@endsection