<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'reference_id',
        'description',
        'credited_wallet',
        'debited_wallet',
        'amount',
        'type',
        'method',
        'status',
        'tweet_id'
    ];

    public function creditedWallet()
    {
        return $this->belongsTo(Wallet::class, 'credited_wallet');
    }

    public function debitedWallet()
    {
        return $this->belongsTo(Wallet::class, 'debited_wallet');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tweet()
{
    return $this->belongsTo(Tweet::class);
}


}
