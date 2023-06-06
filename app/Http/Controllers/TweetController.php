<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Auth;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {   $user;
        $tweets = auth()->user()->timeline();
        $categories = Category::all();
        return view('tweets.index', [
            'tweets' => $tweets,
            'user' => $user,
            'categories' => $categories, 
        ]);
    }

    public function store(Request $request)
    {
        $validated['category_id'] = $request->input('category_id');

        $validated = $request->validate([
            'body' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $validated['user_id'] = auth()->id();
    
        if ($request->hasFile('tweetImage')) {
            $validated['tweetImage'] = $request->file('tweetImage')->store('tweetImages');
        }
    
        Tweet::create($validated);
    
        $request->session()->flash('message', 'Tweet Published');
        return redirect(route('tweets.index'));
    }
    

    public function destroy(Tweet $tweet)
    {
        Tweet::where('id', $tweet->id)->delete();
        return back();
    }
}
