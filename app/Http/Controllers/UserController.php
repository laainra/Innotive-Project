<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

// use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    public function show(User $user)

    {
        $userFollowingCount = DB::table('follows')
        ->where('user_id', $user->id)
        ->count();
        $userFollowersCount = DB::table('follows')
        ->where('following_user_id', $user->id)
        ->count();
        $userTweetsCount = DB::table('tweets')
        ->where('user_id', $user->id)
        ->count();
        $totalDonation = Transaction::where('credited_wallet', auth()->user()->wallet->id)
            ->where('type', 'donate')
            ->sum('amount');
        $following = DB::table('follows')
        ->join('users', 'follows.following_user_id', '=', 'users.id')
        ->select('users.name', 'users.username', 'users.avatar')
        ->where('follows.user_id', $user->id)
        ->get();
        $followers = DB::table('follows')
        ->join('users', 'follows.user_id', '=', 'users.id')
        ->select('users.name', 'users.username', 'users.avatar')
        ->where('follows.following_user_id', $user->id)
        ->get();
        
        

        return view('users.show', [
            'user' => $user,
            'tweets' => $user->tweets()
            ->withLikes()
            ->paginate(50),
            'userFollowingCount' => $userFollowingCount,
            'userFollowersCount' => $userFollowersCount,
            'userTweetsCount' => $userTweetsCount,
            'totalDonation' => $totalDonation,
            'following' => $following,
            'followers' => $followers

        ]);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $users = User::where('username', 'like', '%' . $searchTerm . '%')->paginate(10);

        return view('search', compact('users'), ['users' => $users]);
    }
    public function edit(User $user)
    {
        abort_if($user->isNot(auth()->user()), 404);
        return view('users.edit', compact('user'));
    }

    // public function followingDetails(User $user){



    //     return view('users.following-modal', );



    // }

    // public function followersDetails(User $user){



    //             return view('users.followers-modal', compact('followers'));

    // }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username'=>[
                'string', 
                'required', 
                'max:255', 
                'alpha_dash', ],
            'avatar'=>'file',
            'name'=>'string|required|max:255',
            'description'=>'string',
            'email'=>
            'string|required|email|max:255',
            // 'Unique:users,username,except,$user->email'
            'password'=>'string|required|min:8|max:255|confirmed',
        ]);
        $validated['password'] = Hash::make($request->password);

        if(request('avatar')){
            $validated['avatar'] = request('avatar')->store('avatars');
        }
        if(request('banner')){
            $validated['banner'] = request('banner')->store('banners');
        }
        
        $user->update($validated);
        return redirect(route('users.show', $user));
    }
}
