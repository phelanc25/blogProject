<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        // fetching blog post from blog database based on slug
        $post=Post::where('slug','=',$slug)->first();
        // returning the view and passing it in the post object
        return view('blog.single')->withPost($post);
    }
}