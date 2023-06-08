<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Builder;



class Tweet extends Model
{
    use HasFactory;


    protected $fillable = [ 'user_id', 'body', 'tweetImage' ,'category_id',];

    public function getTweetImageAttribute($value)
    {
        return asset($value ? 'storage/'.$value : null);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
          }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislike($user = null)
    {
        $existingLike = $this->likes()
            ->where('user_id', $user ? $user->id : auth()->user()->id)
            ->first();
    
        if ($existingLike) {
            $existingLike->update(['liked' => false]);
        } else {
            $existingDislike = $this->dislikes()
                ->where('user_id', $user ? $user->id : auth()->user()->id)
                ->first();
    
            if ($existingDislike) {
                $existingDislike->update(['liked' => false]);
            } else {
                $this->likes()->create([
                    'user_id' => $user ? $user->id : auth()->user()->id,
                    'liked' => false,
                ]);
            }
        }
    }
    
    
    

    public function dislikes()
{
    return $this->hasMany(Like::class)->where('liked', false);
}


    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->user()->id,
            ],
            [
                'liked' => $liked,
            ]
        );
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', true)
        ->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', false)
        ->count();
    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function commentCount()
{
    return $this->comments->count();
}
}
