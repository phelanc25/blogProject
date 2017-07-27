<!-- importing main view -->
@extends('main')

<!-- setting page title -->
@section('title','| Create Post')

<!-- displaying main content of page -->
@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Creaet New Post</h1>
			<hr>
			<!-- creating new post entry form -->
			<form method="POST" action="{{ route('posts.store') }}">
				<!-- creating title field -->
				<div class="form-group">
					<label name="title">Title:</label>
					<input id="title" name="title" class="form-control">
				</div>
				<!-- creating body field -->
				<div class="form-group">
					<label name="body">Post Body:</label>
					<textarea id="body" name="body" rows="10" class="form-control"></textarea>
				</div>

				<!-- creating button that will POST the post -->
				<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>





@endsection <!-- end of main content -->