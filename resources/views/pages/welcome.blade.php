@extends('main')

@section('title','| Homepage')

  @section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my Blog</h1>
            <p>Please, read my popular post.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>      
        </div>
      </div> <!-- end of header row -->

      <div class="row">
        <div class="col-md-8">

          <!-- looping through $posts variable that was passed in via pagescontroller.php and showing to screen -->          
          @foreach($posts as $post)

          <div class="post">
            <!-- Showing title of current post in $posts variable.. -->
            <h1>{{$post->title}}</h1>
            <!-- Showing truncated body of current post in $posts variable.. -->

            <p>{{substr($post->body,0,50)}}{{strlen($post->body)>50?"..." : "" }}</p>
            <!-- creating link of current post in $posts variable.. -->
            <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          @endforeach
  
        </div> <!-- end of listing 5 most recent posts -->

        <!--- Creating a sidebar -->
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>

      </div>

@endsection()