<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Like;
use App\Models\Comment;

class NotificationController extends Controller
{
    public function index()
    {
        // Ambil data notifikasi dari tabel transactions dengan type donate dan credited_wallet = auth user
        $donations = Transaction::where('type', 'donate')
        ->where('credited_wallet', auth()->user()->wallet->id)
        ->with('debitedWallet.user' )
        ->get();


        // Ambil data notifikasi dari tabel likes dengan $tweet->user = auth user dan munculkan user yang like yaitu $like->user
        $likes = Like::whereHas('tweet', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
            ->with('user')
            ->get();

        // Ambil data notifikasi dari tabel comments dengan $tweet->user = auth user dan munculkan user yang komen yaitu $comment->user
        $comments = Comment::whereHas('tweet', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
            ->with('user')
            ->get();

        $commentUser= '';
        $donationUser='';
        $likeUser='';

        $notifications = [
            'donations' => $donations,
            'likes' => $likes,
            'comments' => $comments,
        ];



        return view('notifications', compact('notifications'));
    }
}
