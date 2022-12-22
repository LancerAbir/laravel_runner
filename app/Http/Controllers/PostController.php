<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
class PostController extends Controller
{
    public function postFunction(Request $request, FlasherInterface $flasher) { 
        $request->validate([
            'title' =>'required|string|min:3',
            'description' =>'required|string|min:10',
        ]);

        // if ($request->fails()) {
        //     $flasher->addWarning('Validation failed.');
        //     return back();
        // }

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date = now();
        $post->save();

       

        $flasher->addSuccess("Post created successfully");
        return redirect()-> route('dashboard');
    }


    public function editFunction($id, FlasherInterface $flasher) {
        $post = Post::find($id);
        if(empty($post)) {
            $flasher->addError ("No Post Found");
            return redirect()-> route('dashboard');
        }
        return view('edit-post', [
            'post' => $post
        ]);
    }


    public function updateFunction($id, Request $request, FlasherInterface $flasher) {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' =>'required|string|min:3',
            'description' =>'required|string|min:10',
        ]);


        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        $flasher->addSuccess("Post updated successfully");

        return redirect()-> route('dashboard');
    }


    public function deleteFunction($id, FlasherInterface $flasher) {
        $post = Post::findOrFail($id);
        $post->delete();

        $flasher->addSuccess("Post deleted successfully");
        return redirect()-> route('dashboard');
    }

}
