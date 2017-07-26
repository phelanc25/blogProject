<?php

namespace App\Http\Controllers;

//use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		//$posts=Post::orderBy('id','desc')->limit(5)->get();
		//return view('pages.welcome')->withPosts($posts);
		return view('pages.welcome');
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