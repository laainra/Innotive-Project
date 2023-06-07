<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'body', 'tweet_id' ];

    public function tweet(){
        return $this->belongsTo(Tweet::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
