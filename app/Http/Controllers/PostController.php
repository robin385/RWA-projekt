<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function home_page(){
        return view('welcome');
    }


    public function store()
    {
        $attributes = request()->validate([
           'title'=> 'required',
           'thumbnail' => 'required|image',
           'excerpt' => 'required',
           'body' => 'required'
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }
}
