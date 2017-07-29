<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Post;
Use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creating a variable to store all blog post
        $posts=Post::all();
        // showing the index view showing all entries from above variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // showing the view containing the entry form
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // calling function to get validation rules
        // Validating data from form
        $this -> validate($request,[
                'title' =>'required|max:255',
                'body'  =>'required'
            ]);

        // Storing data to the post table of the blog database
        $post= new Post;

        $post->title=$request->title;
        $post->body=$request->body;

        $post->save();

        // passing success message to user
        Session::flash('success','Blog post was successfully saved');


        // Redirecting to the index page
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // finding post in the database and saving info into a variable
        $post=Post::find($id);
        // returning show.blade.php
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // finding the post in the database and saving info in a variable
        $post=Post::find($id);
        // returning the view and passing in the variable
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // calling function to get validation rules
        // Validating data from form
        $this -> validate($request,[
                'title' =>'required|max:255',
                'body'  =>'required'
            ]);

        // Storing data to the post table of the blog database
        $post= Post::find($id);

        $post->title=$request->title;
        $post->body=$request->body;

        $post->save();

        // passing success message to user
        Session::flash('success','Blog post was successfully updated');

        // Redirecting to the index page
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // finding post in database with id
        $post=Post::find($id);

        // deleting the post 
        $post->delete();

        // setting flash message for successful deletion
        Session::flash('success','Blog post was deleted.');

        // redirecting to the index page
        return redirect()->route('posts.index');
    }
}
