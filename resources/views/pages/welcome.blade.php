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
          
          @foreach($posts as $post)

          <div class="post">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          @endforeach
  
        </div>

        <!--- Creating a sidebar -->
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>

      </div>

@endsection()