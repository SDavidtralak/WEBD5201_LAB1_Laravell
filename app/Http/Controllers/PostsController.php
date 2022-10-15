<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    //
    public function index()
    {
        //return session('message');

        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();


       // return $archive;

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {


        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        //create new post
        //$post = new Post;
        /*
        // request data save to db
        $post->title = request('title');
        $post->body = request('body');

        $post->save();
        //redirect to home page
        */

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'title' => request('title'),
        //     'body' => request('body')
        //     ]);
        // return redirect('/');

    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
