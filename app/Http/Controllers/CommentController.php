<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(User $user)
    {
        $tweet = auth()->user()->timeline();
        $comments= Comment::all();
        $user;
    
        return redirect()->route('comment.index', ['tweet' => $tweet]);

            
        
    }
    public function store(Request $request, Tweet $tweet){
        $data = $request->validate([
            'body' => 'required|max:255',
        ]);

        $data['user_id'] = $request->user()->id;

        $tweet->comments()->create($data);

        $comment = Comment::get();

        return redirect()->route('comment.index', ['tweet' => $tweet->id]);


    }
    public function destroy($tweet, $comment)
    {
        $comment = Comment::findOrFail($comment);
        $comment->delete();
        return back();
    }
}
