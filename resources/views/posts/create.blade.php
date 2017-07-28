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
			<h1>Create New Post</h1>
			<hr>
			<!-- creating new post entry form -->
			<form method="POST" action="{{ route('posts.store') }}" data-parsley-validate="">
				<!-- creating title field -->
				<div class="form-group">
					<label name="title">Title:</label>
					<input id="title" name="title" class="form-control" required="" maxlength="255">
				</div>
				<!-- creating body field -->
				<div class="form-group">
					<label name="body">Post Body:</label>
					<textarea id="body" name="body" rows="10" class="form-control" required="" maxlength="255"></textarea>
				</div>

				<!-- creating button that will POST the post -->
				<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>

@endsection <!-- end of main content -->

<!-- importing page specific js for validating form -->
@section('scripts')
    <script type="text/javascript" src="http://parsleyjs.org/dist/parsley.min.js"></script>﻿
@endsection