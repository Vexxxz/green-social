<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Comment $comment)
    {
        $request->validate([
            'message' => 'required | string | max:2048', 
        ]);

        $comment->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success','Comment created successfully.');
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment->update($request->all());

        return redirect()->back()->with('success','Comment Updated successfully.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success','Comment deleted successfully.');
    }
}
