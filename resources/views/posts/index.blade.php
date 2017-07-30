<!-- importing main view -->
@extends('main')

<!-- setting page title -->
@section('title','| All Post')

@section('content')


	<div class="row">
		<!-- Creating column for our page headline -->
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<!-- Creating column for our create new post button -->
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of row -->

	<!-- creating table to show all blog post <--></-->
	<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<!-- creating header for table -->
  					<thead>
  						<th>#</th>
  						<th>Title</th>
  						<th>Body</th>
  						<th>Created At</th>
  						<th>Actions</th>
  					</thead>
					<!-- creating rows in table -->
  					<tbody>
  						<!-- Looping through all post from $posts variable from controller -->
  						@foreach($posts as $post)
							<tr>
								<th>{{$post->id}}</th>
								<td>{{$post->title}}</td>
								<!-- Showing truncated form of blog body using substr-->
								<td>{{substr($post->body,0,50)}}{{ strlen($post->body)>50?"..." : "" }}</td>
								<!-- formating the date to exclude the time -->
								<td>{{date('M j, Y', strtotime($post->created_at))}}</td>
								<td>
									
									<!-- button to take user to post details -->
									<a href="{{ route('posts.show',$post->id) }}" class="btn btn-info btn-md">View Post</a>
									
								</td>
								
							</tr>
  						@endforeach
  					</tbody>
				</table>

				<div class="text-center">
					{!!$posts->render()!!}
				</div>

			</div>
		</div>	
@endsection