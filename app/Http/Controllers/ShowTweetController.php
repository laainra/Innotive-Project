<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
use App\Models\Category;

class ShowTweetController extends Controller
{
    public function show(User $user) {
        $tweet = auth()->user();
        $categories = Category::all();
        return view('tweets.show', [
            'tweet' => $tweet,
            'user' => $user,
            'categories' => $categories,
        ]);
    }
    
}
