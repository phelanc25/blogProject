<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- importing header from header partial _head.blade.php -->
      @include('partials/_head')
    </head>
    
    <body>
      <!-- importing navigatin from header partial _nav.blade.php -->
      @include('partials/_nav')

      <div class="container">
        <!-- importing session messages from messages partial _messages.blade.php -->
        @include('partials/_messages')
        <!-- main content of page will go here -->
        @yield('content')
        <!-- importing footer from footer partial _footer.blade.php -->
        @include('partials/_footer')

      </div> > <!-- end of container -->

      <!-- importing javascript from js partial _javascript.blade.php -->
      @include('partials/_javascript')

      <!-- page specific scripts will go here -->
      @yield('scripts')
      
    </body>
</html>