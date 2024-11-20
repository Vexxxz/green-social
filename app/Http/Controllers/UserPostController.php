<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index()
    {
        $posts = UserPost::paginate(10);

        return view("posts.index", compact("posts"));
    }

    public function create()
    {

        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2048', 
        ]);

        UserPost::create($request->all());


        return redirect()->route('user_posts.index')->with('success', 'Post created successfully.');
    }


    public function destroy(UserPost $userPost)
    {
        $userPost->delete();

    
        return redirect()->route('user_posts.index')->with('success', 'Post deleted successfully.');
    }
}
