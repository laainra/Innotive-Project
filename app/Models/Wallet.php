<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'balance'];

    public function user()
{
    return $this->belongsTo(User::class);
}
public function transactions()
{
    return $this->hasMany(Transaction::class, 'debited_wallet', 'id')
        ->orWhere('credited_wallet', $this->id);
}

public function deposit($amount)
{
    $this->balance += $amount;
    $this->save();
}

public function withdraw($amount)
{
    if ($this->balance >= $amount) {
        $this->balance -= $amount;
        $this->save();
    } else {
        throw new \Exception("Insufficient balance");
    }
}
public function transfer(Wallet $recipient, $amount)
{
    if ($this->balance >= $amount) {
        $this->balance -= $amount;
        $this->save();

        $recipient->balance += $amount;
        $recipient->save();
    } else {
        throw new \Exception("Insufficient balance");
    }
}

}
