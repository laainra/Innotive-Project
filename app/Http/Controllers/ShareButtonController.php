<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Jorenvh\Share\ShareFacade as Share;


class ShareButtonController extends Controller
{
    public function share(Tweet $tweet){

        $data =['user'=>$tweet->user,
        'body'=>$tweet->body,
    ];
        $share = Share::page(route('tweets.show', $tweet))
        ->facebook()
        ->twitter()
        ->linkedin('Extra linkedin summary can be passed here')
        ->whatsapp();

        return view('tweets.modal', compact('share'));

    }
}
