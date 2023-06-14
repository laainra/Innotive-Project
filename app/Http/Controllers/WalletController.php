<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(Transaction $transactions)
    {
        
        $user = Auth::user(); // Retrieve the currently authenticated user
        $wallet = $user->wallet; 
        $transactions = $wallet->transactions;
        // Retrieve the user's wallet
    
        if (!$wallet) {
            $wallet = $user->Wallet::create([
                'user_id' => $user->id,
                'balance' => 0, // Set initial balance to 0
            ]); // Create wallet if it doesn't exist
        }
        
        return view('wallet', compact('user', 'wallet', 'transactions'));
    }

    public function topUp()
    {
        return view('topup');
    }




}
