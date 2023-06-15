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

    public function index()
    {
        $user = Auth::user(); // Retrieve the currently authenticated user
        $wallet = $user->wallet;
        $transactions = Transaction::with(['debitedWallet.user', 'creditedWallet.user'])
            ->where(function ($query) use ($wallet) {
                $query->where('debited_wallet', $wallet->id)
                    ->orWhere('credited_wallet', $wallet->id);
            })
            ->get();
    
        return view('wallet', compact('user', 'wallet', 'transactions'));
    }
    

    public function topUp()
    {
        return view('topup');
    }




}
