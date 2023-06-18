<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Auth;

class TweetController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(User $user, Tweet $tweet)
    {   $user = auth()->user();
        $tweets = auth()->user()->timeline();
        $categories = Category::all();
        
        

        return view('tweets.index', [
            'tweets' => $tweets,
            'user' => $user,
            'categories' => $categories, 
            
        ]);
    }

    public function show($id)
    {
        $tweet = Tweet::findOrFail($id);
        $user = $tweet->user;
        $categories = Category::all();

        $totalDonation = Transaction::where('type', 'donate')
        ->where('tweet_id', $tweet->id)
        ->sum('amount');
    
        return view('tweets.show', [
            'tweet' => $tweet,
            'user' => $user,
            'categories' => $categories,
            'totalDonation' => $totalDonation
        ]);
    }

    public function showTraffic(Tweet $tweet){
        $totalDonation = Transaction::where('type', 'donate')
        ->where('tweet_id', $tweet->id)
        ->sum('amount');

        $topTweets = Tweet::with('transactions')
        ->whereHas('transactions', function ($query) {
            $query->where('user_id', auth()->id())->where('type', 'donate');
        })
        ->withCount('transactions')
        ->orderBy('transactions_count', 'desc')
        ->take(5)
        ->get();

        $topCategories = Category::with(['tweets' => function ($query) {
            $query->where('user_id', auth()->id()) // Filter by authenticated user
                ->whereHas('transactions', function ($query) {
                    $query->where('type', 'donate');
                });
        }])
            ->get()
            ->map(function ($category) {
                $category->totalDonation = $category->tweets->sum(function ($tweet) {
                    return $tweet->transactions->where('type', 'donate')->sum('amount');
                });
                return $category;
            })
            ->sortByDesc('totalDonation')
            ->take(5);
        
    
        return view('traffic', [
            'topTweets' => $topTweets,
            'topCategories' => $topCategories,
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
    public function likeTweet($id)
    {
        $tweet = Tweet::find($id);
        $tweet->like();
        $tweet->save();
        
        return back();
    }
    public function unlikeTweet($id)
    {
        $tweet = Tweet::find($id);
        $tweet->unlike();
        $tweet->save();

        return back();
    }


}
