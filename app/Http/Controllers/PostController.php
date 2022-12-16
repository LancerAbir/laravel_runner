<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postFunction(Request $request) { 
        $request->validate([
            'title' =>'required|string|min:3',
            'description' =>'required|string|min:10',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date = now();
        $post->save();

        return redirect()-> route('dashboard');
    }
}
