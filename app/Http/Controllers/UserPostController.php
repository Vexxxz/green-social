<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index()
    {
        $posts = UserPost::orderBy("created_at", "desc")->paginate(10);

        return view("posts.index", compact("posts"));
    }

    public function show(string $id)
    {
        $post = UserPost::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required | string | max:2048', 
        ]);

        $post = new UserPost();
        $post->message = $request->message;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(string $id)
    {
        $post = UserPost::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'message' => 'required | string | max:2048', 
        ]);

        $post = UserPost::find($id);
        $post->message = $request->message;
        $post->save();

        return redirect()->route('posts.index')->with('success','Post Updated successfully.');
    }

    public function destroy(string $id)
    {
        UserPost::find($id)->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
