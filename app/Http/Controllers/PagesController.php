<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		// Adding 5 most recent posts to $posts variable that is passing int othe pages.welcome view.
		$posts=Post::orderBy('id','desc')->limit(5)->get();
		// returning pages.welcome view and passing in $posts variable that is holding 5 most recent posts.
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first="Chris";
		$last="Phelan";

		$fullname=$first." ".$last;
		$email="phelanc25@gmail.com";

		$data=[];
		$data['email']="phelanc25@gmial.com";
		$data['fullname']=$fullname;

		return view('pages.about')->with('data',$data);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(){
		
	}
}





?>