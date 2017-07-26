<!-- importing main view -->
@extends('main')

<!-- setting page title -->
@section('title','| Contact')

<!-- setting main content for contact page -->
@section('content')

<div class="row">
	<div class="col-md-12">
	  <h1>Contact Me</h1>
	  <hr>
	  <!-- creating contact form -->
	  <form>
	  	<!-- creating email label and input controls for contact form -->
	    <div class="form-group">
	      <label name="email">Email:</label>
	      <input id="email" name="email" class="form-control">
	    </div>
		<!-- creating subject label and input controls for contact form -->
	    <div class="form-group">
	      <label name="subject">Subject:</label>
	      <input id="subject" name="subject" class="form-control">
	    </div>
		<!-- creating message label and input controls for contact form -->
	    <div class="form-group">
	      <label name="message">Message:</label>
	      <textarea id="message" name="message" class="form-control">Type message here...</textarea>
	    </div>
	    
	    <input type="submit" value="Send Message" class="btn btn-success">

	  </form> <!-- end of contact form -->
 	</div>
</div>




@endsection <!-- end of main contenct for contact page