<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\TweetController;
use App\Models\Tweet;


class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tweet $tweet)
    {
        return view('donate', compact('tweet'));
    }
    public function showPay(Tweet $tweet)
    {
        return view('pay', compact('tweet'));
    }
//     public function donate(Tweet $tweet)
// {
//     $user = Auth::user();
    
//     // Update the wallet of the tweet's owner
//     $tweetOwner = $tweet->user;
//     $tweetOwner->wallet += $tweet->donation_amount;
//     $tweetOwner->save();
    
//     // Create a donation record
//     Donate::create([
//         'user_id' => $user->id,
//         'tweet_id' => $tweet->id
//     ]);
    
//     return redirect()->back()->with('success', 'Donation successful!');
// }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tweet $tweet)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $user = auth()->user();
        $amount = $validatedData['amount'];

        $donation = new Donation([
            'user_id' => $user->id,
            'tweet_id' => $tweet->id,
            'amount' => $amount,
        ]);
        $donation->save();

        // Deduct the balance from the user's wallet
        $user->wallet->decrement('balance', $amount);

        // Increment the tweet owner's balance
        $tweet->user->wallet->increment('balance', $amount);

        return redirect()->route('tweets.index')->with('success', 'Donation successful!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonationRequest  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
