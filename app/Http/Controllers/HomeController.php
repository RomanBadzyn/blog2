<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allposts = Post::all();
        return view('home', compact('allposts'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $create_post = new Post;
        $create_post->title = $request->title;
        $create_post->content = $request->content;
        $create_post->save();
        return redirect('/');
    }
}
