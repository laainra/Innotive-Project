<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Models\Tweet;
use App\Models\Comment;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Takshak\Wallet\Traits\HasWallet;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasWallet; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'phone',
        'description',
        'avatar',
        'banner'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value ? 'storage/'.$value : 'images/avatar.png');
        // return "https://i.pravatar.cc/150?u=".$this->email;
    }

    public function getBannerAttribute($value)
    {
        return asset($value ? 'storage/'.$value : 'images/banner1.jpg');
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->validated['password'] = (Hash::needsRehash($value)) ? bcrypt($value) : $value;
    // }

    public function timeline()
    {
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id', $ids)
        ->withLikes()
        ->latest()
        ->paginate(50);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);   
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function following(User $user)
    {
        return $this->follows()
        ->where('following_user_id', $user->id)
        ->exists();
    }

    public function followers()
{
    return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id');
}


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }


        public function createWallet()
        {
            if (!$this->wallet) {
                $wallet = new Wallet();
                $wallet->user_id = $this->id;
                $wallet->balance = 0;
                $wallet->save();
                $this->load('wallet'); // Reload the relationship
            }
    
            return $this->wallet;
        }
    
    

}
