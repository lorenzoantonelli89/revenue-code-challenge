<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //function that return a rules required for the create new post
    private function validations()
    {
        return [
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:5|max:1000',
            'url' => 'required'
        ];
    }
    
    //function that return all post in homepage
    public function index()
    {
        $posts = Post::all();

        return view('pages.home', compact('posts'));
    }

    //function that return in form page for create a new post
    public function create()
    {
        return view('pages.new-post');
    }

    //function that store in DB a new post
    public function store(Request $request)
    {
        $validate = $request->validate($this->validations());
        $post = Post::create($validate);
        return redirect()->route('show', $post->id);
    }

    //function that return details of a specific post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.post-details', compact('post'));
    }

}
