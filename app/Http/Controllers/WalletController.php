<?php

namespace App\Http\Controllers;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function index()
    {
        $wallet = auth()->user()->wallet;
        return view('wallet', compact('wallet'));
    }

    public function topUp()
    {
        return view('topup');
    }

    public function storeTopUp(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $user = auth()->user();
        $amount = $validatedData['amount'];

        $user->wallet->increment('balance', $amount);

        return redirect()->route('wallet.index')->with('success', 'Top-up successful!');
    }



}
