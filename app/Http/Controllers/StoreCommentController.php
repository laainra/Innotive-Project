<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class StoreCommentController extends Controller
{
    public function comment(Request $request, Tweet $tweet){
        $data = $request->validate([
            'body' => 'required|max:255',
        ]);

        $data['user_id'] = $request->user()->id;

        $tweet->comments()->create($data);

        return redirect()->back()->with('success','comment added');

    }
}
